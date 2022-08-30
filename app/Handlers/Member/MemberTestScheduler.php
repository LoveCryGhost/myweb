<?php

namespace App\Handlers\Member;


use App\Http\Controllers\Member\MemberCoreController;
use App\Http\Controllers\User\UserCoreController;
use App\Services\Member\MemberAttributeService;


class TestScheduler extends UserCoreController
{
    public function __construct()
    {
    }

    public function test(){
        \App\Models\User::factory(7)->create();
    }

    public function crawlerTest(){
        dd(12);
    }

}
