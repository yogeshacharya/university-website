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
        $this->courses();
        $this->sliders();
        $this->header();
        $this->footer_address();
        $this->about_us();
    }

    public function clean_tables(){
        DB::table('users')->delete();
        DB::table('menus')->delete();
        DB::table('mst_fee_types')->delete();
        DB::table('courses')->delete();
        DB::table('sliders')->delete();
        DB::table('headers')->delete();
        DB::table('footer_address')->delete();
        DB::table('about_us')->delete();
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
            ['id' => 3,'title' => 'About Us', 'display_order' => '3','parent_id' => null,'type_id' => 0,'link' => '/about_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'News Notices', 'display_order' => '4','parent_id' => null,'type_id' => 0,'link' => '/news_notices','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Gallery', 'display_order' => '5','parent_id' => null,'type_id' => 0,'link' => '/gallery','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Contact Us', 'display_order' => '6','parent_id' => null,'type_id' => 0,'link' => '/contact_us','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            
            // submenus
            ['id' => 7,'title' => 'Introduction', 'display_order' => '1','parent_id' => 3,'type_id' => 1,'link' => '/about_us/introduction','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'title' => 'Our Team', 'display_order' => '2','parent_id' => 3,'type_id' => 1,'link' => '/about_us/our_team','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 9,'title' => 'Department Type', 'display_order' => '3','parent_id' => 3,'type_id' => 1,'link' => '/about_us/department_type','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 10,'title' => 'Class', 'display_order' => '4','parent_id' => 3,'type_id' => 1,'link' => '/about_us/class','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 11,'title' => 'Fee Type', 'display_order' => '5','parent_id' => 3,'type_id' => 1,'link' => '/about_us/fee_type','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 12,'title' => 'Scholarships', 'display_order' => '6','parent_id' => 3,'type_id' => 1,'link' => '/about_us/scholarships','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 13,'title' => 'Agent Details', 'display_order' => '7','parent_id' => 3,'type_id' => 1,'link' => '/about_us/agent_details','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
          
            ['id' => 14,'title' => 'Events', 'display_order' => '1','parent_id' => 4,'type_id' => 1,'link' => '/news_notices/events','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 15,'title' => 'Blogs', 'display_order' => '2','parent_id' => 4,'type_id' => 1,'link' => '/news_notices/blogs','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
    public function courses(){
        DB::table('courses')->insert([
            // mainmenus
            ['id' => 1,'name' => 'Photoshop CC 2017','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'{"code":"001","course_title":"CourseTitle1","credit":"5hrs"}',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'{"fee_type_id":"1","fee":"10000","description":"This is a description"}',
                'visit_counts'=>100,'ratings'=>3.5,'display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'name' => 'Illustrator CC 2017','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'{"code":"002","course_title":"CourseTitle2","credit":"8hrs"}',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'{"fee_type_id":"2","fee":"14000","description":"This is a description"}',
                'visit_counts'=>300,'ratings'=>2,'display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'name' => 'Indesign CC 2017','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'{"code":"003","course_title":"CourseTitle3","credit":"3hrs"}',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'{"fee_type_id":"3","fee":"10400","description":"This is a description"}',
                'visit_counts'=>200,'ratings'=>5,'display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function sliders(){
        DB::table('sliders')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Slider One','file_upload'=>'Sliders/noimg.jpg','description'=>'Description of first slider','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Slider Two','file_upload'=>'Sliders/noimg.jpg','description'=>'Description of second slider','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function header(){
        DB::table('headers')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Lincon','logo'=>'Logo/noimg.jpg','subtitle'=>'subtitle of first','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function footer_address(){
        DB::table('footer_address')->insert([
            ['id' => 1,'title' => 'Slider Two','full_address'=>'This is full address','phone'=>'+97798768766676','fax'=>'998878787','email'=>'sandip.silwal.ss@gamil.com','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function about_us(){
        DB::table('about_us')->insert([
            ['id' => 1,'title' => 'Slider Two','file_upload'=>'Logo/noimg.jpg','details'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
}
