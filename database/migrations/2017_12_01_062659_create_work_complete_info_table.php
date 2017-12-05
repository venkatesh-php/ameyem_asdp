<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkCompleteInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_complete_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('global_id',11);
            $table->string('user_id',16);
            $table->string('completed_date',24);
            $table->string('request',20);
            $table->string('request_by',20);
            $table->string('date',24);
            $table->string('description',700);
            $table->string('file_title',40);
            $table->string('file_url',96);
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
        Schema::dropIfExists('work_complete_info');
    }
}
