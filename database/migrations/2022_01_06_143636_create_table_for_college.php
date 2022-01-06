<?php

use Database\Seeders\MenuSeeder;
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

        Schema::create('mst_fee_type', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100);
            $table->string('price',100);
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('mst_department_type', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100);
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });


        Schema::create('menus', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->unsignedSmallInteger('display_order')->nullable();
            $table->string('type', 20)->nullable();
            $table->string('link', 255)->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        $MenuSeeder = new MenuSeeder();
        $MenuSeeder->run();

        Schema::create('about_us', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('details',500);
            $table->string('file_upload',500)->nullable();
                    
            $table->timestamps();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
        });


        Schema::create('gallery', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->unsignedSmallInteger('display_order')->nullable();
            $table->string('file_upload',500)->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

       

        Schema::create('courses', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('course_code',200);
            $table->string('title',200);
            $table->string('duration',200);
            $table->string('study_mode',200)->nullable();
            $table->string('file_upload',500)->nullable();
            $table->unsignedSmallInteger('fee_type_id')->nullable();
            $table->string('payment_plan',500)->nullable();
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();

            $table->foreign('fee_type_id','fk_courses_fee_type_id')->references('id')->on('mst_fee_type');
                    
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
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();

            $table->foreign('department_type_id','fk_contact_us_department_type_id')->references('id')->on('mst_department_type');
                    
        });

        Schema::create('news_notices', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('file_upload',500)->nullable();
            $table->string('description',500)->nullable();
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('fee_structure', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('course_name',200);
            $table->string('duration',100);
            $table->string('fees',100);
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('scholarships', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('description',500)->nullable();
            $table->string('file_upload',500)->nullable();
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
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
            $table->string('image',500)->nullable();
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('faq', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',100);
            $table->string('description',500)->nullable();
            $table->unsignedSmallInteger('display_order')->nullable();
                    
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('slider', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title',200);
            $table->string('image',500)->nullable();
            $table->string('description',500)->nullable();
            $table->unsignedSmallInteger('display_order')->nullable();

            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('human_resource', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('code',100)->nullable();
            $table->unsignedSmallInteger('type')->nullable();
            $table->string('name',100);
            $table->string('description',500)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('address',50)->nullable();
            $table->string('degree',50)->nullable();
            $table->string('institute',50)->nullable();
            $table->string('image',500)->nullable();

            $table->unsignedSmallInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('events', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',100);
            $table->string('date',10);
            $table->string('description',500)->nullable();

            $table->unsignedSmallInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });

        Schema::create('class', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',100);
            $table->string('capacity',50)->nullable();
            $table->string('section',50)->nullable();
            $table->string('description',500)->nullable();

            $table->unsignedSmallInteger('display_order')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_uq_code')->nullable()->default(1);
            $table->unsignedInteger('deleted_by')->nullable();
                    
        });



        Schema::table('menus', function (Blueprint $table) {
            $table->unsignedSmallInteger('parent_id')->nullable();

            $table->foreign('parent_id','fk_menus_parent_id')->references('id')->on('menus');
        });


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
