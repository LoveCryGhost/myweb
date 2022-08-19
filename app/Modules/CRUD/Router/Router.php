<?php
// src/app/Custom/Router.php

namespace App\Modules\CRUD\Router;

use Illuminate\Routing\Router as BaseRouter;
use Illuminate\Support\Str;


class Router extends BaseRouter
{
    public $actions = [

        //Master-Multi
        "MultiEdit" => "multiEdit",
        "MultiUpdate" => "multiUpdate",
        "MultiCreate" => "multiCreate",
        "MultiStore" => "multiStore",
        "MultiPrint" => "multiPrint",
        "MultiDestroy" => "multiDestroy",

        //Master-Multi Modal
        "ModalMultiEdit" => "modalMultiEdit",
        "ModalMultiUpdate" => "modalMultiUpdate",
        "ModalMultiCreate" => "modalMultiCreate",
        "ModalMultiStore" => "modalMultiStore",
        "ModalMultiDestroy" => "modalMultiDestroy",

        "ModalCreate" => "modalCreate",
        "ModalStore" => "modalStore",

        //Master
        "Print" => "print",
        "Import" => "import",
        "Exports" => "exports",
        "MultiDownload" => "multiDownload",



        //Detail
        "EditSearch" => "editSearch",
        "EditList" => "editList",
        "DetailEdit" => "detailEdit",
        "DetailUpdate" => "detailUpdate",
        "DetailCreate" => "detailCreate",
        "DetailStore" => "detailStore",
        "DetailDestroy" => "detailDestroy",

        "MultiDetailEdit" => "multiDetailEdit",
        "MultiDetailUpdate" => "multiDetailUpdate",
        "MultiDetailCreate" => "multiDetailCreate",
        "MultiDetailStore" => "multiDetailStore",
        "MultiDetailDestroy" => "multiDetailDestroy",



        "ModalMultiDetailEdit" => "modalMultiDetailEdit",
        "ModalMultiDetailUpdate" => "modalMultiDetailUpdate",
        "ModalMultiDetailCreate" => "modalMultiDetailCreate",
        "ModalMultiDetailStore" => "modalMultiDetailStore",
    ];
    public function crudResource($name, $controller, array $options = [])
    {
        $model = Str::singular($name); // this is optional, i need it for Route Model Binding

        foreach ($this->actions as $Method => $action){
            $this->addRoute([strtoupper($Method), "post"], // set the http methods
                $name .'/'.$action,
                $controller . '@'.$action
            )->name($name . '.'.$action);
        }

        return $this->resource($name, $controller, $options);
    }
}
