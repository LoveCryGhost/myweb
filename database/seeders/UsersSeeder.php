<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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

    public function seedFactoryData(){
        if(!env("SEED_FACTORY_DATA")){
            return false;
        }

        \App\Models\User::factory(100)->create();

        $user = User::find(1);
        $user->name = 'User';
        $user->email = 'user@app.com';
        $user->password = bcrypt('1234567890');
//        $user->activated = true;
//        $user->activation_token = null;
//        $user->is_admin = true;
        $user->save();
    }

    public function seedGoogleData(){
        if(!env("SEED_GOOGLE_DATA")){
            return false;
        }
    }
}
