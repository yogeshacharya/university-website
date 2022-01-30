<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCoursesTableAddCommonField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->text('delivery_mode')->nullable();
            $table->text('course_facts')->nullable();
            $table->text('course_structure_summary')->nullable();
            $table->text('fee_structure')->nullable();
            $table->text('application_process')->nullable();
            $table->text('process_under_law')->nullable();
            $table->text('contact_details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
