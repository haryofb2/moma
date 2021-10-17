<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('event_name')->nullable();
            $table->integer('category_event_id')->unsigned();
            $table->string('content')->nullable();
            $table->float('price')->nullable();
            $table->text('venue')->nullable();
            $table->text('image')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->integer('reward_event_id')->unsigned();
            $table->integer('event_type')->unsigned();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('speaker')->unsigned();
            $table->boolean('is_highlight')->nullable();
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreign('category_event_id')->references('category_event_id')->on('category_event');
            $table->foreign('reward_event_id')->references('reward_event_id')->on('reward_event');
            $table->foreign('event_type')->references('event_type_id')->on('event_type');
            $table->foreign('speaker')->references('expert_id')->on('expert');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
