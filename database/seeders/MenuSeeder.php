<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            ['id' => 1,'title' => 'Home', 'display_order' => '1','type' => 'page','link' => '/home','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Courses', 'display_order' => '2','type' => 'page','link' => '/courses','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Future Students', 'display_order' => '3','type' => 'nav','link' => '/future_students','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Current Students', 'display_order' => '4','type' => 'nav','link' => '/current_students','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'About Us', 'display_order' => '5','type' => 'page','link' => '/about_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Contact Us', 'display_order' => '6','type' => 'page','link' => '/contact_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]);
    }
}
