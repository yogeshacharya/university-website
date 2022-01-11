<?php

use Database\Seeders\MenuSeeder;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForCollege extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('mst_fee_types', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100);
            $table->unsignedInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('mst_department_types', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100);
            $table->unsignedInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });


        Schema::create('menus', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->unsignedInteger('display_order')->nullable();
            $table->unsignedSmallInteger('type_id')->nullable();
            $table->string('link', 255)->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });
        Schema::table('menus', function (Blueprint $table) {
            $table->unsignedSmallInteger('parent_id')->nullable();

            $table->foreign('parent_id','fk_menus_parent_id')->references('id')->on('menus')->onDelete('cascade')->change();;
        });

        Schema::create('about_us', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',255);
            $table->string('details',500);
            $table->string('file_upload',500)->nullable();
                    
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });


        Schema::create('galleries', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->text('description')->nullable();
            $table->unsignedInteger('display_order')->nullable();
            $table->string('file_upload',500)->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

       

        Schema::create('courses', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',200);
            $table->text('description',500);
            $table->text('entry_requirement')->nullable();
            $table->json('course_structure')->nullable();//code, course title, credit
            $table->string('file_upload',500)->nullable();
            $table->string('payment_plan',500)->nullable();
            $table->json('courses_fee',100)->nullable(); //type // fee //description
            $table->unsignedInteger('display_order')->nullable();
            $table->unsignedInteger('visit_counts')->nullable();
            $table->unsignedInteger('ratings')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });


        Schema::create('contact_us', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('phone',50);
            $table->string('email',50);
            $table->unsignedSmallInteger('department_type_id')->nullable();
            $table->string('message',500)->nullable();
                    
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);

            $table->foreign('department_type_id','fk_contact_us_department_type_id')->references('id')->on('mst_department_types');
                    
        });

        Schema::create('news_notices', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('file_upload',500)->nullable();
            $table->string('description',500)->nullable();
            $table->date('date_ad')->nullable();
            $table->unsignedInteger('display_order')->nullable();
            $table->unsignedInteger('visit_counts')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('scholarships', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('description',500)->nullable();
            $table->string('file_upload',500)->nullable();
            $table->unsignedInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('agent_details', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('agent_name',200);
            $table->string('email',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('website',50)->nullable();
            $table->string('address',50)->nullable();
            $table->string('city',50)->nullable();
            $table->string('country',50)->nullable();
            $table->string('description',500)->nullable();
            $table->string('file_upload',500)->nullable();
            $table->unsignedInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('faqs', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100);
            $table->string('description',500)->nullable();
            $table->unsignedInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('sliders', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('file_upload',500)->nullable();
            $table->string('description',500)->nullable();
            $table->unsignedInteger('display_order')->nullable();

            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('human_resources', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('code',100)->nullable();
            $table->unsignedSmallInteger('type')->nullable();
            $table->unsignedSmallInteger('department_type_id')->nullable();
            $table->string('name',100);
            $table->string('description',500)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('address',50)->nullable();
            $table->string('degree',50)->nullable();
            $table->string('institute',50)->nullable();
            $table->string('file_upload',500)->nullable();

            $table->unsignedInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);

            $table->foreign('department_type_id','fk_human_resources_department_type_id')->references('id')->on('mst_department_types');
                    
        });

        Schema::create('social_media', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('human_resource_id')->nullable();
            $table->unsignedSmallInteger('social_resource_id')->nullable();
            $table->string('url',50)->nullable();
            $table->unsignedInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);

            $table->foreign('human_resource_id','fk_social_media_human_resource_id')->references('id')->on('human_resources');
        });


        Schema::create('events', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',100);
            $table->date('date');
            $table->string('time',20);
            $table->string('location',100);
            $table->string('description',500)->nullable();
            $table->string('file_upload',500)->nullable();

            $table->unsignedInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
                    
        });

        Schema::create('mst_classes', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',100);
            $table->string('capacity',50)->nullable();
            $table->string('section',50)->nullable();
            $table->string('description',500)->nullable();

            $table->unsignedInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(true);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });

        Schema::create('headers', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100)->nullable();
            $table->string('subtitle',100)->nullable();
            $table->string('logo',500)->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });

        Schema::create('footer_address', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title')->nullable();
            $table->string('full_address')->nullable();
            $table->string('description')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',50)->nullable();
            $table->string('email',50)->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100)->nullable();
            $table->string('description',500)->nullable();
            $table->date('date');
            $table->unsignedInteger('visit_counts')->nullable();
            $table->string('image')->nullable();

            $table->unsignedInteger('display_order')->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100)->nullable();
            $table->unsignedSmallInteger('sub_menu_id')->nullable();
            $table->string('description',500)->nullable();
            $table->string('slug',50);
            $table->string('file_upload')->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);

            $table->foreign('sub_menu_id','fk_pages_sub_menu_id')->references('id')->on('menus');
        });

        Schema::create('sayings', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('said_by',100)->nullable();
            $table->string('saying',500)->nullable();
            $table->string('image')->nullable();
            $table->unsignedSmallInteger('human_resource_id')->nullable();

            $table->unsignedInteger('display_order')->nullable();
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedSmallInteger('deleted_by')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);

            $table->foreign('human_resource_id','fk_saying_human_resource_id')->references('id')->on('human_resources');
        });

        $DbSeed = new DatabaseSeeder();
        $DbSeed->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
