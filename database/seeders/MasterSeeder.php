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
        $this->category();
        $this->mst_social_media();
        $this->department_type();
        $this->feeType();
        $this->courses();
        $this->sliders();
        $this->college_details();
        $this->about_us();
        $this->human_resources();
        $this->gallery();
        $this->events();
        $this->news();
        $this->blogs();
        $this->scholarship();
        $this->college_social_media();
        $this->saying();
        $this->agent_detail();
        $this->hr_social_media();
    }
    
    public function clean_tables(){
        DB::table('users')->delete();
        DB::table('categories')->delete();
        DB::table('mst_social_media')->delete();
        DB::table('mst_fee_types')->delete();
        DB::table('courses')->delete();
        DB::table('sliders')->delete();
        DB::table('about_us')->delete();
        DB::table('human_resources')->delete();
        DB::table('galleries')->delete();
        DB::table('events')->delete();
        DB::table('news_notices')->delete();
        DB::table('mst_department_types')->delete();
        DB::table('blogs')->delete();
        DB::table('scholarships')->delete();
        DB::table('menus')->delete();
        DB::table('college_details')->delete();
        DB::table('college_social_media')->delete();
        DB::table('sayings')->delete();
        DB::table('agent_details')->delete();
        DB::table('hr_social_media')->delete();
    }
    public function userSeeder(){
        DB::table('users')->insert([
            ['id' => 1,'name' => 'admin', 'email' => 'admin@gmail.com','password'=> \Hash::make('123456')],
        ]); 
    }
    public function category(){
        DB::table('categories')->insert([
            // gallery
            ['id' => 1,'name' => 'First cat','menu_id'=>'5','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'name' => 'Second cat','menu_id'=>'5','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'name' => 'Third_cat','menu_id'=>'5','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'name' => 'Fourth','menu_id'=>'5','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            
            // news
            ['id' => 5,'name' => 'Gallery','menu_id'=>'4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'name' => 'Contact Us','menu_id'=>'4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 7,'name' => 'Fee Stucture','menu_id'=>'4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'name' => 'Our Team','menu_id'=>'4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 9,'name' => 'Scholarships','menu_id'=>'4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 10,'name' => 'Our Agents','menu_id'=>'4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
          
            //events
            ['id' => 11,'name' => 'Events','menu_id'=>'11','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 12,'name' => 'Blogs','menu_id'=>'11','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            
            //blogs
            ['id' => 13,'name' => 'blog one cat','menu_id'=>'12','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 14,'name' => 'blog_two_cat','menu_id'=>'12','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]);
        // DB::statement("SELECT SETVAL('menus_id_seq',1000)");

    }
    private function mst_social_media(){
        DB::table('mst_social_media')->insert([
            array('id' => '1','code' => 'fb', 'name' => 'FaceBook', 'display_order' => 1, 'is_active' => true),
            array('id' => '2','code' => 'tw', 'name' => 'Twitter', 'display_order' => 2, 'is_active' => true),            
            array('id' => '3','code' => 'lin', 'name' => 'Linkedin', 'display_order' => 3, 'is_active' => true),            
            array('id' => '4','code' => 'yu', 'name' => 'Youtube', 'display_order' => 4, 'is_active' => true),            
            array('id' => '5','code' => 'ig', 'name' => 'Instagram', 'display_order' => 5, 'is_active' => true),            
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
            ['id' => 10,'title' => 'Our Agents', 'display_order' => '7','parent_id' => 3,'type_id' => 1,'link' => '/about_us/agents','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
          
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
            ['id' => 1,'syllabus'=>'Syllabus/course1.pdf','name' => 'Diploma of Leadership and Management','levels'=>'Begineer','start_on'=>'2022-01-01','duration'=>15,
                'class_size'=>40,'lectures'=>14,'time'=>'7 am to 12 pm','description' =>'This qualification reflects the role of individuals in a variety of information and communications technology (ICT) roles who have significant experience in specialist technical skills, or managerial business and people management skills.
                Individuals in these roles carry out complex tasks in a specialist field, working independently, leading a team or a strategic direction of a business. They apply their skills across a wide range of industries and business functions, or as a business owner (sole trader/contractor).',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"001","course_title":"CourseTitle1","credit":"5hrs"}]',
                'file_upload'=>'Course/course1.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"1","total_fee":"10000","description":"This is a description"}]',
                'visit_counts'=>500,'ratings'=>3.5,'display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'syllabus'=>'Syllabus/course2.pdf','name' => 'Advanced Diploma of Leadership and Management','levels'=>'Intermediate','start_on'=>'2021-01-01','duration'=>10,
            'class_size'=>30,'lectures'=>20,'time'=>'8 am to 1 pm','description' =>'This qualification reflects the role of individuals in a variety of information and communications technology (ICT) roles who have significant experience in specialist technical skills, or managerial business and people management skills.',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"002","course_title":"CourseTitle2","credit":"8hrs"}]',
                'file_upload'=>'Course/course2.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"2","total_fee":"14000","description":"This is a description"}]',
                'visit_counts'=>100,'ratings'=>2,'display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'syllabus'=>'Syllabus/course3.pdf','name' => 'Graduate Diploma of Strategic Leadership','levels'=>'Master','start_on'=>'2021-12-01','duration'=>25,
            'class_size'=>20,'lectures'=>20,'time'=>'6 am to 10 pm','description' =>'This qualification reflects the role of individuals in a variety of information and communications technology (ICT) roles who have significant experience in specialist technical skills, or managerial business and people management skills.

            Individuals in these roles carry out complex tasks in a specialist field, working independently, leading a team or a strategic direction of a business. They apply their skills across a wide range of industries and business functions, or as a business owner (sole trader/contractor).',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"003","course_title":"CourseTitle3","credit":"3hrs"}]',
                'file_upload'=>'Course/course3.jpg','payment_plan'=>'anual','courses_fee'=>'[{"fee_type_id":"3","total_fee":"10400","description":"This is a description"}]',
                'visit_counts'=>200,'ratings'=>5,'display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'syllabus'=>'Syllabus/course4.pdf','name' => 'Advanced Diploma of Information Technology','levels'=>'Begineer','start_on'=>'2021-09-01','duration'=>25,
             'class_size'=>50,'lectures'=>20,'time'=>'9 am to 3 pm','description' =>'Individuals in these roles carry out complex tasks in a specialist field, working independently, leading a team or a strategic direction of a business. They apply their skills across a wide range of industries and business functions, or as a business owner (sole trader/contractor).',
                'entry_requirement' => 'Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content Over 40 lectures and 60 hours of content',
                'course_structure'=>'[{"code":"004","course_title":"master","credit":"4hrs"}]',
                'file_upload'=>'Course/course4.jpg','payment_plan'=>'monthly','courses_fee'=>'[{"fee_type_id":"3","total_fee":"15400","description":"This is a description"}]',
                'visit_counts'=>100,'ratings'=>4,'display_order' => '4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function sliders(){
        DB::table('sliders')->insert([
            // mainmenus
            ['id' => 1,'display_order'=>2,'title' => 'START YOUR COREER WITH US','file_upload'=>'Sliders/slider1.jpg','description'=>'CAMPUS IN SYDNEY','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'display_order'=>1,'title' => 'START YOUR COREER WITH US','file_upload'=>'Sliders/slider2.jpg','description'=>'CAMPUS IN SYDNEY','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
   
    public function college_details(){
        DB::table('college_details')->insert([
            ['id' => 1,'title' => 'Lincoln','enrolment_form'=>'Forms/enrolment_form.pdf','gps'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74983.41378301271!2d150.9838068164885!3d-33.84249391117579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a4976b4734ed%3A0xf017d68f9f14250!2sBlaxland%20Riverside%20Park!5e0!3m2!1sen!2snp!4v1642845596251!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>','logo'=>'Logo/logo.png','full_address'=>'This is full address','phone'=>'+97798768766676','fax'=>'998878787','email'=>'sandip.silwal.ss@gamil.com','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function college_social_media(){
        DB::table('college_social_media')->insert([
            ['id' => 1,'college_details_id' => 1,'social_media_id'=> 1,'url'=>'https://www.facebook.com','display_order'=> 1,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'college_details_id' => 1,'social_media_id'=> 2,'url'=>'https://www.twitter.com','display_order'=> 2,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'college_details_id' => 1,'social_media_id'=> 3,'url'=>'https://www.linkedin.com','display_order'=> 3,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'college_details_id' => 1,'social_media_id'=> 4,'url'=>'https://www.youtube.com','display_order'=> 4,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'college_details_id' => 1,'social_media_id'=> 5, 'url'=>'https://www.instagram.com','display_order'=> 5,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function about_us(){
        DB::table('about_us')->insert([
            ['id' => 1,'title' => 'WHY CHOOSE LINCOLN COLLEGE','file_upload'=>'AboutUs/about_us.jpg','details'=>'Medicus College is dedicatedly providing study options that prepare our students to become leaders and innovators in their careers. We can help you get started on your career path, opening a world of opportunity and gaining the skills to change yourself and the world.
            We deliver quality education and training to international students according to the Australian Vocational Education and Training sector. We offer nationally recognised degrees that help our students develop skills that meet current industry needs. Our qualifications give students the knowledge and experience they need to be fully prepared for their chosen career path.','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
            ['id' => 1,'code'=>'001','type'=>1,'department_type_id'=>2,'name' => 'Sandip Silwal','email'=>'sandip.silwal.ss@gmail.com','phone'=>'9843180434','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/teacher1.jpg','display_order' => '1','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'code'=>'002','type'=>2,'department_type_id'=>3,'name' => 'Sunil Pathak','email'=>'sunil.pathak@gmail.com','phone'=>'9843180767','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '2','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'code'=>'003','type'=>0,'department_type_id'=>1,'name' => 'Yogesh Acharya','email'=>'yogesh.acharya@gmail.com','phone'=>'9843180567','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '3','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'code'=>'004','type'=>1,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/teacher2.jpg','display_order' => '4','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'code'=>'005','type'=>2,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '5','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'code'=>'006','type'=>1,'department_type_id'=>2,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'CEO','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/teacher3.jpg','display_order' => '6','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 7,'code'=>'007','type'=>3,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Hr','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/noimg.jpg','display_order' => '7','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'code'=>'008','type'=>1,'department_type_id'=>1,'name' => 'Ram Thapa','email'=>'ram.thapa@gmail.com','phone'=>'9843180778','designation'=>'Hr','address'=>'Banasthali, Kathmandu','degree'=>'Bachelor','institute'=>'Acme Engineering College','file_upload'=>'HumanResource/teacher4.jpg','display_order' => '8','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
    public function hr_social_media(){
        DB::table('hr_social_media')->insert([
            ['id' => 1,'human_resource_id' => 1,'social_media_id'=> 1,'url'=>'https://www.facebook.com','display_order'=> 1,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'human_resource_id' => 2,'social_media_id'=> 2,'url'=>'https://www.twitter.com','display_order'=> 2,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'human_resource_id' => 3,'social_media_id'=> 3,'url'=>'https://www.linkedin.com','display_order'=> 3,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'human_resource_id' => 4,'social_media_id'=> 4,'url'=>'https://www.youtube.com','display_order'=> 4,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'human_resource_id' => 5,'social_media_id'=> 5, 'url'=>'https://www.instagram.com','display_order'=> 5,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'human_resource_id' => 6,'social_media_id'=> 1,'url'=>'https://www.facebook.com','display_order'=> 6,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 7,'human_resource_id' => 7,'social_media_id'=> 2,'url'=>'https://www.twitter.com','display_order'=> 7,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 8,'human_resource_id' => 8,'social_media_id'=> 3,'url'=>'https://www.linkedin.com','display_order'=> 8,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 9,'human_resource_id' => 9,'social_media_id'=> 4,'url'=>'https://www.youtube.com','display_order'=> 9,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 10,'human_resource_id' => 10,'social_media_id'=> 5, 'url'=>'https://www.instagram.com','display_order'=> 10,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 11,'human_resource_id' => 1,'social_media_id'=> 2,'url'=>'https://www.facebook.com','display_order'=> 11,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 12,'human_resource_id' => 2,'social_media_id'=> 3,'url'=>'https://www.twitter.com','display_order'=> 12,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 13,'human_resource_id' => 3,'social_media_id'=> 4,'url'=>'https://www.linkedin.com','display_order'=> 13,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 14,'human_resource_id' => 4,'social_media_id'=> 5,'url'=>'https://www.youtube.com','display_order'=> 14,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 15,'human_resource_id' => 5,'social_media_id'=> 1, 'url'=>'https://www.instagram.com','display_order'=> 15,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 16,'human_resource_id' => 6,'social_media_id'=> 2,'url'=>'https://www.facebook.com','display_order'=> 16,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 17,'human_resource_id' => 7,'social_media_id'=> 3,'url'=>'https://www.twitter.com','display_order'=> 17,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 18,'human_resource_id' => 8,'social_media_id'=> 4,'url'=>'https://www.linkedin.com','display_order'=> 18,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 19,'human_resource_id' => 9,'social_media_id'=> 5,'url'=>'https://www.youtube.com','display_order'=> 19,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 20,'human_resource_id' => 10,'social_media_id'=> 1, 'url'=>'https://www.instagram.com','display_order'=> 20,'is_active'=> 1,'created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function gallery(){
        DB::table('galleries')->insert([
            // mainmenus
            ['id' => 1,'title' => 'gallery One','category_id'=>'1','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '1','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'gallery Two','category_id'=>'2','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '2','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'gallery Three','category_id'=>'2','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '3','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'gallery Four','category_id'=>'1','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '4','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'gallery Five','category_id'=>'3','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '5','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'gallery Six','category_id'=>'1','file_upload'=>'Gallery/noimg.jpg','description'=>'Donald Palmer is a Specialist Real Estate Agent with 8 years of Experience in Real Estate field. He achive success with his honesty,determination, hardwork and commetment. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, totam?','display_order' => '6','created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function events(){
        DB::table('events')->insert([
            // mainmenus
            ['id' => 1,'name' => 'Event One','time'=>'09AM - 05PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/event1.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Over 40 lectures and 60 hours of content','display_order' => '1','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'name' => 'Event Two','time'=>'10AM - 03PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/event2.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Live Project End to End Software Testing Training Included','display_order' => '2','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'name' => 'Event Three','time'=>'09AM - 05PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/event3.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Information packed practical training starting from basics to advanced testing techniques.','display_order' => '3','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'name' => 'Event Four','time'=>'08AM - 01PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/event4.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Course content designed by considering current software testing technology and the job market.','display_order' => '4','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'name' => 'Event Five','time'=>'10AM - 06PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/event5.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Best suitable for beginners to advanced level users and who learn faster when demonstrated.','display_order' => '5','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'name' => 'Event Six','time'=>'01PM - 03PM','location'=>'Gongabu, Kathmandu, Nepal','file_upload'=>'Event/event5.jpg','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. t ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','content'=>'Practical assignments at the end of every session.','display_order' => '6','date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function news(){
        DB::table('news_notices')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Summer Holidays Announcement','file_upload'=>'NewsNotice/news1.jpg','description'=>'Dear All,

                    As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                    At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                    We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                    Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                    LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                    Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '1','visit_counts'=>400,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Summer Holidays Announcement','file_upload'=>'NewsNotice/news2.jpg','description'=>'Dear All,

                    As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                    At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                    We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                    Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                    LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                    Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '2','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Summer Holidays Announcement','file_upload'=>'NewsNotice/news3.jpg','description'=>'Dear All,

                    As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                    At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                    We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                    Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                    LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                    Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '3','visit_counts'=>600,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Summer Holidays Announcement','file_upload'=>'NewsNotice/news4.jpg','description'=>'Dear All,

                    As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                    At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                    We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                    Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                    LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                    Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '4','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Summer Holidays Announcement','file_upload'=>'NewsNotice/news5.jpg','description'=>'Dear All,

                    As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                    At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                    We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                    Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                    LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                    Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '5','visit_counts'=>300,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Summer Holidays Announcement','file_upload'=>'NewsNotice/news5.jpg','description'=>'Dear All,

                    As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                    At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                    We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                    Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                    LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                    Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '6','visit_counts'=>500,'date_ad'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function blogs(){
        DB::table('blogs')->insert([
            // mainmenus
            ['id' => 1,'title' => 'Blog One','image'=>'Blog/blog1.jpg','description'=>'Dear All,

                As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '1','visit_counts'=>400,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'title' => 'Blog Two','image'=>'Blog/blog2.jpg','description'=>'Dear All,

                As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '2','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'title' => 'Blog Three','image'=>'Blog/blog3.jpg','description'=>'Dear All,

                As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '3','visit_counts'=>600,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'title' => 'Blog Four','image'=>'Blog/blog4.jpg','description'=>'Dear All,

                As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '4','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'title' => 'Blog Five','image'=>'Blog/blog5.jpg','description'=>'Dear All,

                As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '5','visit_counts'=>300,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'title' => 'Blog Six','image'=>'Event/blog5.jpg','description'=>'Dear All,

                As we start to wrap up another eventful year, we wanted to take a moment to wish you and your family a Merry Christmas and happy 2022!

                At the end of last year, we were looking forward to a new year with no more interruptions from Covid. Thank you for your continued trust in Medicus in 2021. We’ve taken the challenges in our stride, continuing to improve our students support with standards while also introducing innovative new plans and services.

                We’d also like to remind you that our students support team will still be available over the phone to assist with any immediate concerns (info@medicus.edu.au).

                Students Classes will resume from 31st January 2022 (this may vary, depending on the individual student’s timetable)

                LMS Support: Available on weekdays except for public holidays and weekends (lmssupport@medicus.edu.au)

                Admin/student Support Not available -23rd December till the 9th January 2022.','display_order' => '6','visit_counts'=>500,'date'=>Carbon::now()->toDateString(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
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
    public function saying(){
        DB::table('sayings')->insert([
            ['id' => 1,'display_order'=>1,'said_by' => "Dr. Hari Narayan Gupta",'saying'=> "Lincoln International college is on e of the best college on the world.Lincoln International college is on e of the best college on the world.Lincoln International college is on e of the best college on the world.",'image'=> 'Saying/saying.jpg','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'display_order'=>2,'said_by' => "Dr. Hari Narayan Gupta",'saying'=> "Lincoln International college is on e of the best college on the world.Lincoln International college is on e of the best college on the world.Lincoln International college is on e of the best college on the world.",'image'=> 'Saying/saying1.jpg','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'display_order'=>3,'said_by' => "Dr. Hari Narayan Gupta",'saying'=> "Lincoln International college is on e of the best college on the world.Lincoln International college is on e of the best college on the world.Lincoln International college is on e of the best college on the world.",'image'=> 'Saying/saying2.jpg','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
    public function agent_detail(){
        DB::table('agent_details')->insert([
            ['id' => 1,'display_order'=>1,'agent_name' => "PFEC Global - Education Consultant and Migration Agent in Melbourne",'email'=> "sandip.silwal.ss@gmail.com",'file_upload'=> 'Agents/agent1.png','phone'=>'+9779843180434','website'=>'www.lincolninternationalcollege.com','address'=>'Raniban, banasthali','city'=>'Kathmandu','country'=>'Nepal','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 2,'display_order'=>2,'agent_name' => "PFEC Global - Education",'email'=> "sandip.silwal.ss@gmail.com",'file_upload'=> 'Agents/agent2.png','phone'=>'+9779843180434','website'=>'www.lincolninternationalcollege.com','address'=>'Raniban, banasthali','city'=>'Kathmandu','country'=>'Nepal','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 3,'display_order'=>3,'agent_name' => "PFEC Global - Education Consultant and Migration Agent in Melbourne",'email'=> "sandip.silwal.ss@gmail.com",'file_upload'=> 'Agents/agent3.png','phone'=>'+9779843180434','website'=>'www.lincolninternationalcollege.com','address'=>'Raniban, banasthali','city'=>'Kathmandu','country'=>'Nepal','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 4,'display_order'=>4,'agent_name' => "PFEC Global - Education Migration Agent in Melbourne",'email'=> "sandip.silwal.ss@gmail.com",'file_upload'=> 'Agents/agent4.png','phone'=>'+9779843180434','website'=>'www.lincolninternationalcollege.com','address'=>'Raniban, banasthali','city'=>'Kathmandu','country'=>'Nepal','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 5,'display_order'=>5,'agent_name' => "PFEC Global - Education Consultant and Migration Agent in Melbourne",'email'=> "sandip.silwal.ss@gmail.com",'file_upload'=> 'Agents/agent5.png','phone'=>'+9779843180434','website'=>'www.lincolninternationalcollege.com','address'=>'Raniban, banasthali','city'=>'Kathmandu','country'=>'Nepal','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
            ['id' => 6,'display_order'=>6,'agent_name' => "PFEC Global - Education Consultant and Migration Agent in Melbourne",'email'=> "sandip.silwal.ss@gmail.com",'file_upload'=> 'Agents/agent6.png','phone'=>'+9779843180434','website'=>'www.lincolninternationalcollege.com','address'=>'Raniban, banasthali','city'=>'Kathmandu','country'=>'Nepal','created_by'=> 1,'deleted_uq_code'=> 1,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()],
        ]); 
        // DB::statement("SELECT SETVAL('mst_fee_types_id_seq',1000)");
    }
}
