<?php

namespace App\Handlers\Member;


use App\Http\Controllers\Member\MemberCoreController;
use App\Services\Member\MemberAttributeService;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;


class MemberCrawlerShopeeScheduler extends MemberCoreController
{
    public function __construct()
    {
        set_time_limit(0);
    }


    //$process = new Process(['python3','/Users/andymac/www/project/stw/storage/python/mh_erp/Controller/test/test_parameter.py', $json]);

    public function shopee_categories()
    {
        $json = json_encode(['start_date'=> 123 , 'end_date' => 456]);

        //dd(config("settings.python.command"), config("settings.python.shopee_controller_path")."/cralwerShopeeCatetories.py");
        $process = new Process([ config("settings.python.command"), config("settings.python.shopee_controller_path")."/cralwerShopeeCatetories.py", $json ]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }

}
