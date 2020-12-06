<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FreshDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command For fresh database and run the seeds';

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
     * @return int
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');
        $this->info('Successfully For fresh database and run seeder user');
    }
}
