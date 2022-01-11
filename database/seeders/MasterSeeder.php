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
        $this->mst_social_media();
        $this->department_type();
        $this->menuSeeder();
        $this->feeType();
        $this->courses();
        $this->sliders();
        $this->header();
        $this->footer_address();
        $this->about_us();
        $this->human_resources();
        $this->gallery();
        $this->events();
        $this->news();
        $this->blogs();
    }

    public function clean_tables(){
        DB::table('users')->delete();
        DB::table('mst_social_media')->delete();
        DB::table('menus')->delete();
        DB::table('mst_fee_types')->delete();
        DB::table('courses')->delete();
        DB::table('sliders')->delete();
        DB::table('headers')->delete();
        DB::table('footer_address')->delete();
        DB::table('about_us')->delete();
        DB::table('human_resources')->delete();
        DB::table('galleries')->delete();
        DB::table('events')->delete();
        DB::table('news_notices')->delete();
        DB::table('mst_department_types')->delete();
        DB::table('blogs')->delete();
    }

    private function mst_social_media(){
        DB::table('mst_social_media')->insert([
            array('id' => '1','code' => 'fb', 'name' => 'FaceBook', 'display_order' => 1, 'is_active' => true),
            array('id' => '2','code' => 'tw', 'name' => 'Twitter', 'display_order' => 2, 'is_active' => true),            
        ]);
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
                'course_structure'=>'[{"code":"001","course_title":"CourseTitle1","credit":"5hrs"}]',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"1","total_fee":"10000","description":"This is a description"}]',
                'visit_counts'=>500,'ratings'=>3.5,'display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'name' => 'Illustrator CC 2017','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"002","course_title":"CourseTitle2","credit":"8hrs"}]',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"2","total_fee":"14000","description":"This is a description"}]',
                'visit_counts'=>100,'ratings'=>2,'display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'name' => 'Indesign CC 2017','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"003","course_title":"CourseTitle3","credit":"3hrs"}]',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"3","total_fee":"10400","description":"This is a description"}]',
                'visit_counts'=>200,'ratings'=>5,'display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'name' => 'Master In Economics','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"004","course_title":"master","credit":"4hrs"}]',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'monthly','courses_fee'=>'[{"fee_type_id":"3","total_fee":"15400","description":"This is a description"}]',
                'visit_counts'=>100,'ratings'=>4,'display_order' => '4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
    public function department_type(){
        DB::table('mst_department_types')->insert([
            ['id' => 1,'title' => 'Computer','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Civil','display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Architecture','display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function human_resources(){
        DB::table('human_resources')->insert([
            ['id' => 1,'code'=>'001','type'=>1,'department_type_id'=>2,'name' => 'Sandip Silwal','email'=>'sandip.silwal.ss@gmail.com','phone'=>'9843180434','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '1','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'code'=>'002','type'=>2,'department_type_id'=>3,'name' => 'Sunil Pathak','email'=>'sunil.pathak@gmail.com','phone'=>'9843180767','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '2','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'code'=>'003','type'=>0,'department_type_id'=>1,'name' => 'Yogesh Acharya','email'=>'yogesh.acharya@gmail.com','phone'=>'9843180567','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '3','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'code'=>'004','type'=>1,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'code'=>'005','type'=>2,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'code'=>'006','type'=>1,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 7,'code'=>'007','type'=>3,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'code'=>'008','type'=>1,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 9,'code'=>'009','type'=>3,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 10,'code'=>'010','type'=>1,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 11,'code'=>'011','type'=>3,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 12,'code'=>'012','type'=>1,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 13,'code'=>'013','type'=>3,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 14,'code'=>'014','type'=>1,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 15,'code'=>'015','type'=>2,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 16,'code'=>'016','type'=>2,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 17,'code'=>'017','type'=>2,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Description of second slider','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function gallery(){
        DB::table('galleries')->insert([
            // mainmenus
            ['id' => 1,'title' => 'gallery One','file_upload'=>'Gallery/noimg.jpg','description'=>'Description of first slider','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'gallery Two','file_upload'=>'Gallery/noimg.jpg','description'=>'Description of second slider','display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'gallery Three','file_upload'=>'Gallery/noimg.jpg','description'=>'Description of third slider','display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'gallery Four','file_upload'=>'Gallery/noimg.jpg','description'=>'Description of fourth slider','display_order' => '4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'gallery Five','file_upload'=>'Gallery/noimg.jpg','description'=>'Description of fifth slider','display_order' => '5','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'gallery Six','file_upload'=>'Gallery/noimg.jpg','description'=>'Description of sixth slider','display_order' => '6','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function events(){
        DB::table('events')->insert([
            // mainmenus
            ['id' => 1,'name' => 'Event One','time'=>'09AM - 05PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Description of first event','display_order' => '1','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'name' => 'Event Two','time'=>'10AM - 03PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Description of second event','display_order' => '2','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'name' => 'Event Three','time'=>'09AM - 05PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Description of third event','display_order' => '3','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'name' => 'Event Four','time'=>'08AM - 01PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Description of fourth event','display_order' => '4','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'name' => 'Event Five','time'=>'10AM - 06PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Description of fifth event','display_order' => '5','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'name' => 'Event Six','time'=>'01PM - 03PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Description of sixth event','display_order' => '6','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function news(){
        DB::table('news_notices')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Title One','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Description of first Title','display_order' => '1','visit_counts'=>400,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Title Two','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Description of second Title','display_order' => '2','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Title Three','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Description of third Title','display_order' => '3','visit_counts'=>600,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Title Four','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Description of fourth Title','display_order' => '4','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Title Five','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Description of fifth Title','display_order' => '5','visit_counts'=>300,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Title Six','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Description of sixth Title','display_order' => '6','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function blogs(){
        DB::table('blogs')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Blog One','image'=>'Blog/noimg.jpg','description'=>'Description of first Blog','display_order' => '1','visit_counts'=>400,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Blog Two','image'=>'Blog/noimg.jpg','description'=>'Description of second Blog','display_order' => '2','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Blog Three','image'=>'Blog/noimg.jpg','description'=>'Description of third Blog','display_order' => '3','visit_counts'=>600,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Blog Four','image'=>'Blog/noimg.jpg','description'=>'Description of fourth Blog','display_order' => '4','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Blog Five','image'=>'Blog/noimg.jpg','description'=>'Description of fifth Blog','display_order' => '5','visit_counts'=>300,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Blog Six','image'=>'Event/noimg.jpg','description'=>'Description of sixth event','display_order' => '6','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
}
