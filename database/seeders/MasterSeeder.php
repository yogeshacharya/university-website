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
        $this->scholarship();
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
        DB::table('scholarships')->delete();
    }

    private function mst_social_media(){
        DB::table('mst_social_media')->insert([
            array('id' => '1','code' => 'fb', 'name' => 'FaceBook', 'display_order' => 1, 'is_active' => true),
            array('id' => '2','code' => 'tw', 'name' => 'Twitter', 'display_order' => 2, 'is_active' => true),            
            array('id' => '3','code' => 'lin', 'name' => 'Linkden', 'display_order' => 3, 'is_active' => true),            
            array('id' => '4','code' => 'goo', 'name' => 'Google', 'display_order' => 4, 'is_active' => true),            
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
            ['id' => 7,'title' => 'Fee Stucture', 'display_order' => '1','parent_id' => 3,'type_id' => 1,'link' => '/about_us/fee_type','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'title' => 'Our Team', 'display_order' => '2','parent_id' => 3,'type_id' => 1,'link' => '/about_us/our_team','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 9,'title' => 'Scholarships', 'display_order' => '6','parent_id' => 3,'type_id' => 1,'link' => '/about_us/scholarships','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 10,'title' => 'Agent Details', 'display_order' => '7','parent_id' => 3,'type_id' => 1,'link' => '/about_us/agent_details','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
          
            ['id' => 11,'title' => 'Events', 'display_order' => '1','parent_id' => 4,'type_id' => 1,'link' => '/news_notices/events','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 12,'title' => 'Blogs', 'display_order' => '2','parent_id' => 4,'type_id' => 1,'link' => '/news_notices/blogs','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
            ['id' => 1,'name' => 'Photoshop CC 2017','levels'=>'Begineer','start_on'=>'2022-01-01','duration'=>15,
                'class_size'=>40,'lectures'=>14,'time'=>'7 am to 12 pm','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"001","course_title":"CourseTitle1","credit":"5hrs"}]',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"1","total_fee":"10000","description":"This is a description"}]',
                'visit_counts'=>500,'ratings'=>3.5,'display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'name' => 'Illustrator CC 2017','levels'=>'Intermediate','start_on'=>'2021-01-01','duration'=>10,
            'class_size'=>30,'lectures'=>20,'time'=>'8 am to 1 pm','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"002","course_title":"CourseTitle2","credit":"8hrs"}]',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"2","total_fee":"14000","description":"This is a description"}]',
                'visit_counts'=>100,'ratings'=>2,'display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'name' => 'Indesign CC 2017','levels'=>'Master','start_on'=>'2021-12-01','duration'=>25,
            'class_size'=>20,'lectures'=>20,'time'=>'6 am to 10 pm','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"003","course_title":"CourseTitle3","credit":"3hrs"}]',
                'file_upload'=>'Course/noimg.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"3","total_fee":"10400","description":"This is a description"}]',
                'visit_counts'=>200,'ratings'=>5,'display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'name' => 'Master In Economics','levels'=>'Begineer','start_on'=>'2021-09-01','duration'=>25,
             'class_size'=>50,'lectures'=>20,'time'=>'9 am to 3 pm','description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
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
            ['id' => 1,'title' => 'Slider One','file_upload'=>'Sliders/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Slider Two','file_upload'=>'Sliders/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
            ['id' => 1,'title' => 'Slider Two','full_address'=>'This is full address','phone'=>'+97798768766676','fax'=>'998878787','email'=>'sandip.silwal.ss@gamil.com','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function about_us(){
        DB::table('about_us')->insert([
            ['id' => 1,'title' => 'Slider Two','file_upload'=>'Logo/noimg.jpg','details'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
            ['id' => 1,'code'=>'001','type'=>1,'department_type_id'=>2,'name' => 'Sandip Silwal','email'=>'sandip.silwal.ss@gmail.com','phone'=>'9843180434','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '1','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'code'=>'002','type'=>2,'department_type_id'=>3,'name' => 'Sunil Pathak','email'=>'sunil.pathak@gmail.com','phone'=>'9843180767','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '2','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'code'=>'003','type'=>0,'department_type_id'=>1,'name' => 'Yogesh Acharya','email'=>'yogesh.acharya@gmail.com','phone'=>'9843180567','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '3','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'code'=>'004','type'=>1,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '4','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'code'=>'005','type'=>2,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '5','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'code'=>'006','type'=>1,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'CEO','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '6','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 7,'code'=>'007','type'=>3,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Hr','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '7','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'code'=>'008','type'=>1,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Hr','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '8','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 9,'code'=>'009','type'=>3,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Hr','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '9','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 10,'code'=>'010','type'=>1,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Hr','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '10','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 11,'code'=>'011','type'=>3,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'HOD','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '11','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 12,'code'=>'012','type'=>1,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Manager','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '12','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 13,'code'=>'013','type'=>3,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Manager','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '13','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 14,'code'=>'014','type'=>1,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Manager','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '14','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 15,'code'=>'015','type'=>2,'department_type_id'=>3,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Manager','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '15','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 16,'code'=>'016','type'=>2,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Manager','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '16','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 17,'code'=>'017','type'=>2,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Manager','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '17','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function gallery(){
        DB::table('galleries')->insert([
            // mainmenus
            ['id' => 1,'title' => 'gallery One','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'gallery Two','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'gallery Three','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'gallery Four','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'gallery Five','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '5','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'gallery Six','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '6','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function events(){
        DB::table('events')->insert([
            // mainmenus
            ['id' => 1,'name' => 'Event One','time'=>'09AM - 05PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Over 40 lectures and 60 hours of content','display_order' => '1','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'name' => 'Event Two','time'=>'10AM - 03PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Live Project End to End Software Testing Training Included','display_order' => '2','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'name' => 'Event Three','time'=>'09AM - 05PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Information packed practical training starting from basics to advanced testing techniques.','display_order' => '3','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'name' => 'Event Four','time'=>'08AM - 01PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Course content designed by considering current software testing technology and the job market.','display_order' => '4','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'name' => 'Event Five','time'=>'10AM - 06PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Best suitable for beginners to advanced level users and who learn faster when demonstrated.','display_order' => '5','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'name' => 'Event Six','time'=>'01PM - 03PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/noimg.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Practical assignments at the end of every session.','display_order' => '6','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function news(){
        DB::table('news_notices')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Title One','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '1','visit_counts'=>400,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Title Two','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '2','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Title Three','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '3','visit_counts'=>600,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Title Four','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '4','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Title Five','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '5','visit_counts'=>300,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Title Six','file_upload'=>'NewsNotice/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '6','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function blogs(){
        DB::table('blogs')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Blog One','image'=>'Blog/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '1','visit_counts'=>400,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Blog Two','image'=>'Blog/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '2','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Blog Three','image'=>'Blog/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '3','visit_counts'=>600,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Blog Four','image'=>'Blog/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '4','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Blog Five','image'=>'Blog/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '5','visit_counts'=>300,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Blog Six','image'=>'Event/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '6','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function scholarship(){
        DB::table('scholarships')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Scholarship Name: 20 Talent Student Scholarships 2021/2022','description'=>'This scholarship supports eligible exceptional elite students based upon their achievement. The student will receive up to 20% additional scholarships towards their tuition fees. 

            “Wouldn’t it be great to be gifted? In fact… It turns out that choices lead to habits. Habits become talents. Talents are labeled gifts. You’re not born this way, you get this way.” – Seth Godin','process'=>'Students should submit evidence of their achievements in writing with supporting documents.

            This can include:
            
            Evidence of having been awarded a Medal in the Nationally or Internationally
            Evidence of outstanding achievement in any Competition
             
            The PEO of the institute will consider applications.
            
            Applications should be submitted to admissions@medicus.edu.au','eligibility'=>'Everyone is unique in that they feel part of who they have demonstrated exceptional talent by having performed outstandingly in high-level competitions or recognised by the relevant authority.  

            You are Maybe one of the following,
            
            Leader
            Artist
            Craftsman
            Intrapreneur
            Magician
            Musician
            Networking (person to person)
            Photographer
            Public Speaker
            Singer
            Storyteller
             
            All students want to receive financial assistance, which is why we’ve compiled a list of special talents specifically pitched towards the unique hobbies that make students who they are.
            
             
            
            Eligibility:
            
            Currently enrolled who has 1.5 years of study to complete at Medicus College
            Maintaining satisfactory course progress
            Does not have any outstanding fees','outcome'=>'The announcement of scholarship awards will be announced via email.  

            What are the benefits?
            
             
            
            Depending on the student’s achievement, the institute will announce a percentage of scholarships between 5% to 20%. The Scholarship percentage will be decided at the sole discretion of the PEO. Scholarship’s value will be adjusted towards the end of the course.','contact'=>'11 London Circuit Canberra ACT 2601
            Ph. 1300 131 017
            Email: info@medicus.edu.au
            Office Hours: 9AM – 5PM','application_open'=>Carbon::now()->toDateString(),'application_close'=>Carbon::now()->toDateString(),'display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
}
