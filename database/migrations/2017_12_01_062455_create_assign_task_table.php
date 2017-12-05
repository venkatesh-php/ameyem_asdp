<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('global_id',20);
            $table->string('assigned_to_userid',20);
            $table->string('assigned_by',20);
            $table->string('assigned_date',55);
            $table->string('target_date',55);
            $table->string('guide',20);
            $table->string('reviewer',20);
            $table->string('user_credits',10);
            $table->string('guide_credits',10);
            $table->string('reviewer_credits',10);
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
        Schema::dropIfExists('assign_task');
    }
}
