<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteconfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_configs')->insert([
            'name' => 'Abdur Razzak',
            'title' => 'Ecommerce Website',
            'email' => 'a.razzak12@gmail.com',
            'mobile' => '01721788183',
            'address' => 'Panthopoth Dhaka',
            'logo' => 'logo.png',
            'ficon_logo' => 'ficon-logo.png',
            
        ]);
    }
}
