<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('globle_id',11);
            $table->string('synthesis_date',55);
            $table->string('work_type',11);
            $table->string('work_nature',18);
            $table->string('work_title',87);
            $table->string('work_description',479);
            $table->number('reserved_credits_user');
            $table->number('reserved_credits_guide');
            $table->number('reserved_credits_reviewer');
            $table->string('whats_in_it_for_me',168);
            $table->string('synthesized_by_userid',20);
            $table->string('file_name',34);
            $table->string('file_url',73);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_task');
    }
}
