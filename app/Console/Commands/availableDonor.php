<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class availableDonor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'availableDonor:deleteSeeker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete seeker post after a week';

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
        DB::table('seekers')->where('requiredDate','<',carbon::now())->delete();
    }

}
