<?php
namespace Database\Seeders;

use App\Models\Admin\Admin;
//use App\Models\Member\Member;
//use App\Services\GoogleSheet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    public function run()
    {
        $this->seedFactoryData();
        $this->seedDefaultData();
        $this->seedGoogleData();
    }

    public function seedDefaultData(){
        if(!env("SEED_DEFAULT_DATA")){
            return false;
        }
    }

    public function seedFactoryData()
    {
        if(!env("SEED_FACTORY_DATA")){
            return false;
        }

        \App\Models\Admin\Admin::factory(10)->create();

        $admin = Admin::find(1);
        $admin->name = 'supder-admin';
        $admin->email = 'super_admin@app.com';
        //$admin->avatar = '';
        $admin->save();

        $admin = Admin::find(2);
        $admin->name = 'admin-2';
        $admin->email = 'admin2@app.com';
        //$admin->avatar = '';
        $admin->save();

    }

    public function seedGoogleData()
    {
        if(!env("SEED_GOOGLE_DATA")){
            return false;
        }

    }
}
