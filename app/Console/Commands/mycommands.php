<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;
class mycommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'myproject:refreshdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ahmed command  refresh database ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('migrate:refresh');
        //
    }
}
