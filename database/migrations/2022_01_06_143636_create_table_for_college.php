<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('full_name',100);
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
