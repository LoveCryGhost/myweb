<?php

namespace App\Handlers\Scheduler;


class TestScheduler
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
