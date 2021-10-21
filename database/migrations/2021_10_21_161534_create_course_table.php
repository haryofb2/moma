<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('course_name')->nullable();
            $table->integer('category_course_id')->unsigned();
            $table->integer('course_type_id')->unsigned();
            $table->float('price')->nullable();
            $table->text('venue')->nullable();
            $table->text('image')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->text('description')->nullable();
            
            $table->timestamps();
        });

        Schema::table('course',function(Blueprint $table){
            $table->foreign('category_course_id')->references('category_course_id')->on('category_course');
            $table->foreign('course_type_id')->references('course_type_id')->on('course_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
