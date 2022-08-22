<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Member;
use App\Modules\CRUD;
use App\Modules\CRUD\Router\Textbox;
use App\Modules\CRUD\Service\CRUDService;
use Illuminate\Support\Str;

class AdminAdminsController extends AdminCoreController
{
    public function __construct()
    {
        //$this->crudService = new CRUDService($guard="admin", $routeName="admin", $viewName="admin");
    }

    public function index(){

        //dd(request()->all());

        //indexSearch
        $this->crudService->indexSearch()
            ->rowContainer([
                "col-md-6",[
                    (new Textbox('name','value','indexSearch',"" ))->tags('Name')->fuzzySearch(),
                    (new Textbox('email','value','indexSearch',"" ))->tags('Email')->fuzzySearch(),
                ],
                "col-md-6",[
                    (new Textbox('tel','value','indexSearch',"" ))->tags('Tel')->fuzzySearch(),
                    (new Textbox('phone','value','indexSearch',"" ))->tags('Phone')->fuzzySearch(),
                ]
            ])
        ;

        // indexSortable
        $this->crudService->indexSortable()
            ->rowContainer([
                "col-md-12",[
                    (new Textbox('name','value','indexSortable', "Name")),
                    (new Textbox('email','value','indexSortable', "Email")),
                    (new Textbox('tel','value','indexSortable', "Tel")),
                ]
            ]);

        // indexList
        $this->crudService->indexList()
            ->rowContainer([
                "col-md-12", [
                    (new Textbox('name','value','indexSortable', "Name")),
                    (new Textbox('email','value','indexSortable', "Email")),
                    (new Textbox('tel','value','indexSortable', "Tel")),
                    (new Textbox('birthday','value','indexSortable', "Tel")),
                ]
            ])
            ->multiCRUDButtons(['multiEdit', 'multiCreate', 'multiDestroy', 'multiPrint', 'create'])
            ->actionButtons(['edit', 'delete', 'create', 'print', 'show']);;


        $query = new Member();
        $query = $this->queryIndexSearch($query, $this);

        $pages=request()->input('indexList.pages',3);
        $this->crudData = $query->paginate($pages);
        return view('admin.admin.index', ['_this'=> $this]);
    }

    public function queryIndexSearch($query){
        //dd($this->crudService->indexSearch->rowContainer[0]->ctrlitems);
        foreach($this->crudService->indexSearch->rowContainer[0]->ctrlitems as $items){
//            若不是Array, 則是 Col-md
//            0 => "col-md"
//            1 => array:2 [▶]
//            2 => "col-md"
//            3 => array:3 [▶]
            if(is_array($items)){
                foreach ($items as $index => $ctrlitem){
                    //value
                    $name = $ctrlitem->name;
                    $fuzzySearch = $ctrlitem->fuzzySearch;
                    if($ctrlitem->forceValue) {
                        $value = $ctrlitem->forceValue;
                        $query = $this->checkIfFuzzySearch($query, $name, $value, $fuzzySearch);
                    }elseif(request()->input("indexSearch.".$ctrlitem->name)){
                        $value=request()->input("indexSearch.".$ctrlitem->name);
                        $query = $this->checkIfFuzzySearch($query, $name, $value, $fuzzySearch);
                    }elseif($ctrlitem->defaultValue) {
                        $value = $ctrlitem->defaultValue;
                        $query = $this->checkIfFuzzySearch($query, $name, $value, $fuzzySearch);
                    }

                }
            }
        }
        return $query;
    }

    public function checkIfFuzzySearch($query, $name, $value, $fuzzySearch){
        if($fuzzySearch){
            $query = $query->where($name, 'like', '%'.$value.'%');
        }else{
            $query = $query->where($name, $value);
        }
        return $query;
    }

    public function indexListAjaxDataHandler(){
        $getData = [];
        foreach (request()->input("form_serializeArray_data") as $name_value){
            $contains = Str::contains($name_value['name'], "indexList#tr_selected#");
            if($contains){
                $name = str_replace("indexList#tr_selected#","", $name_value['name']);
                $value=$name_value['value'];
                $getData["tr_selected"][] = $value;
            }
        }
        return $getData;
    }

    public function edit(){

        return view('admin.admin.edit', ['_this'=> $this]);
    }

    public function modalMultiEdit(){

        $form_serializeArray_data = request()->input("form_serializeArray_data");
        $tableTrData = $this->indexListAjaxDataHandler();
        $this->rows = Member::find($tableTrData['tr_selected']);

        // indexList
        $this->crudService->modalMultiEdit()
            ->rowContainer([
                "col-md-12", [
                    (new Textbox('name','value','modalMultiEdit', "Name")),
                    (new Textbox('email','value','modalMultiEdit', "Email")),
                    (new Textbox('tel','value','modalMultiEdit', "Tel")),
                    (new Textbox('birthday','value','modalMultiEdit', "Tel")),
                ]
            ]);


        return [
            '_this' => $this,
            'request' => request()->all(),
            'form_serializeArray_data' => $form_serializeArray_data,
            'tableTrData' => $tableTrData,
            'view' => view($this->crudService->views->modalMultiEdit, ['_this'=>$this, 'rows' =>$this->rows])->render()
        ];
    }

    public function modalMultiUpdate(){
        $form_serializeArray_data = request()->input("form_serializeArray_data");
        $form_data_combine = request()->input("form_data_combine");

        $rows = [];
        foreach (request()->input("form_serializeArray_data") as $name_value){
            $contains = Str::contains($name_value['name'], "modalMultiEdit#");
            if($contains){
                $name_id = str_replace("modalMultiEdit#","", $name_value['name']);
                $name= explode("#",$name_id)[0];
                $id = explode("#",$name_id)[1];
                $value=$name_value['value'];
                $rows[$id][$name] = $value;
            }
        }

        //儲存Data
        foreach ($rows as $id => $row){
            $admin = Member::find($id);
            foreach ($row as $name => $value){
                $admin->$name = $value;
            }
            $admin->save();
        }

        $this->index();
        foreach ($rows as $id => $row) {
            $newRow[$id]= Member::find($id);
            $view[$id] = view('admin.admin.masterTr',['_this'=>$this, 'tr_type' => 'tbody_tr', 'row'=> $newRow[$id] ])->render();
        }

        return [
            '_this' => $this,
            'request' => request()->all(),
            'form_serializeArray_data' => $form_serializeArray_data,
            'tableTrData' => "",
            'row' => $rows,
            'view' => $view
        ];
    }

    public function modalMultiDestroy(){
        $form_serializeArray_data = request()->input("form_serializeArray_data");
        $tableTrData = $this->indexListAjaxDataHandler();

        return [
            '_this' => $this,
            'request' => request()->all(),
            'form_serializeArray_data' => $form_serializeArray_data,
            'tableTrData' => $tableTrData,
            'view' => ""
        ];
    }

    public function modalMultiCreate(){
        $form_serializeArray_data = request()->input("form_serializeArray_data");
        $tableTrData = $this->indexListAjaxDataHandler();

        // indexList
        $this->crudService->modalMultiCreate()
            ->rowContainer([
                "col-md-12", [
                    (new Textbox('name','value','modalMultiCreate', "Name"))->validations(['required'=>'required']),
                    (new Textbox('email','value','modalMultiCreate', "Email")),
                    (new Textbox('tel','value','modalMultiCreate', "Tel")),
                    (new Textbox('birthday','value','modalMultiCreate', "Tel")),
                ]
            ]);

        return [
            '_this' => $this,
            'request' => request()->all(),
            'form_serializeArray_data' => $form_serializeArray_data,
            'tableTrData' => $tableTrData,
            'view' => view($this->crudService->views->modalMultiCreate, ['_this'=>$this, 'tr_type' => 'tbody_tr', 'row'])->render()
        ];
    }

    public function modalMultiStore(){
        $form_serializeArray_data = request()->input("form_serializeArray_data");
        $form_data_combine = request()->input("form_data_combine");
        dd($form_serializeArray_data,$form_data_combine);
        $rows = [];
        foreach (request()->input("form_serializeArray_data") as $name_value){
            $contains = Str::contains($name_value['name'], "modalMultiCreate#");
            if($contains){
                $name_id = str_replace("modalMultiCreate#","", $name_value['name']);
                $name= explode("#",$name_id)[0];
                $id = explode("#",$name_id)[1];
                $value=$name_value['value'];
                $rows[$id][$name] = $value;
            }
        }

        //儲存Data
        foreach ($rows as $id => $row){
            $admin = Member::find($id);
            foreach ($row as $name => $value){
                $admin->$name = $value;
            }
            $admin->save();
        }

        $this->index();
        foreach ($rows as $id => $row) {
            $newRow[$id]= Member::find($id);
            $view[$id] = view('admin.admin.masterTr',['_this'=>$this, 'tr_type' => 'tbody_tr', 'row'=> $newRow[$id] ])->render();
        }

        return [
            '_this' => $this,
            'request' => request()->all(),
            'form_serializeArray_data' => $form_serializeArray_data,
            'tableTrData' => "",
            'row' => $rows,
            'view' => $view
        ];
    }

    public function store()
    {

        $getData = $this->indexListAjaxDataHandler();

        dd(
            $getData,
            request()->input("form_data_combine"),

            "original",
            request()->input("form_serialize_data"),
            request()->input("form_serializeArray_data"),

            "parse_str",
//            $form_serialize_data,
//            $form_serializeArray_data,

            "json_encode",
            json_encode(request()->input("form_serialize_data")),
            json_encode(request()->input("form_serializeArray_data")),

            "(collect)json_decode",
            collect(json_encode(request()->input("form_serialize_data"))),
            collect(json_encode(request()->input("form_serializeArray_data"))),

            "json_decode",
//            json_decode(request()->input("form_serialize_data")),
//            json_decode(request()->input("form_serializeArray_data")),

        //$form_data["indexList"]["selected"]
        );
        return [
            '_this' => $this,
            'request' => request()->all(),
            'form_data' => $form_data,
            'view' => ""
        ];
    }
}
