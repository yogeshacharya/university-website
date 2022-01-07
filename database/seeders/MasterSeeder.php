<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->clean_tables();
        $this->userSeeder();
        $this->menuSeeder();
        $this->feeType();
    }

    public function clean_tables(){
        DB::table('users')->delete();
        DB::table('menus')->delete();
        DB::table('mst_fee_types')->delete();
    }

    public function userSeeder(){
        DB::table('users')->insert([
            ['id' => 1,'name' => 'admin', 'email' => 'admin@gmail.com','password'=> \Hash::make('123456')],
        ]); 
    }

    public function menuSeeder(){
        DB::table('menus')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Home', 'display_order' => '1','parent_id' => null,'type_id' => 0,'link' => '/home','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Courses', 'display_order' => '2','parent_id' => null,'type_id' => 0,'link' => '/courses','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Future Students', 'display_order' => '3','parent_id' => null,'type_id' => 0,'link' => '/future_students','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Current Students', 'display_order' => '4','parent_id' => null,'type_id' => 0,'link' => '/current_students','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Contact Us', 'display_order' => '5','parent_id' => null,'type_id' => 0,'link' => '/contact_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            
            // submenus
            ['id' => 6,'title' => 'About Us', 'display_order' => '1','parent_id' => 3,'type_id' => 1,'link' => '/about_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 7,'title' => 'Tution Fee', 'display_order' => '2','parent_id' => 3,'type_id' => 1,'link' => '/tution_fee','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'title' => 'Scholarships', 'display_order' => '3','parent_id' => 3,'type_id' => 1,'link' => '/scholarships','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 9,'title' => 'Latest News & Update', 'display_order' => '1','parent_id' => 4,'type_id' => 1,'link' => '/about_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 10,'title' => 'Work Permit', 'display_order' => '2','parent_id' => 4,'type_id' => 1,'link' => '/about_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        
        ]);
        // DB::statement("SELECT SETVAL('menus_id_seq',1000)");

    }
    public function feeType(){
        DB::table('mst_fee_types')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Tution Charge', 'display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Enrolment Fee', 'display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Material Fees', 'display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
}
