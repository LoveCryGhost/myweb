<?php

namespace App\Console\Commands;

use App\Jobs\TestJob;
use Illuminate\Console\Command;

class TestCorn extends Command
{
    protected $signature = 'command:TestCorn';
    protected $description = 'Command TestCorn';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        dispatch((new TestJob())->onQueue('default'));
    }
}
