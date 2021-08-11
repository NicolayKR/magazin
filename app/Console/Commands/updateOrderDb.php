<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\clothes;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class updateOrderDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:order-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete old';

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
        Order::where('status', 0)->whereRaw('updated_at < DATE_SUB(DATE(NOW()), INTERVAL 5 DAY)')->whereRaw('created_at < DATE_SUB(DATE(NOW()), INTERVAL 5 DAY)')->delete();
        DB::table('clothes_order')->whereRaw('updated_at < DATE_SUB(DATE(NOW()), INTERVAL 5 DAY)')->whereRaw('created_at < DATE_SUB(DATE(NOW()), INTERVAL 5 DAY)')->delete();
    }
}
