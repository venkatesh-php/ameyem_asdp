<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname',100);
            $table->number('mobile_number',15);
            $table->string('fathername',100);
            $table->string('mothername',100);
            $table->string('date_of_birth',100);
            $table->string('qualification',10);
            $table->string('cource_specialization',20);
            $table->string('marks_grade',20);
            $table->string('date_of_completion1',20);
            $table->string('grade_10th',20);
            $table->string('date_of_completion2',20);
            $table->string('grade_inter',20);
            $table->string('date_of_completion3',20);
            $table->string('marks_bachler_degree',20);
            $table->string('date_of_completion4',20);
            $table->string('heard_of_asdp_by',20);
            $table->string('refered_by',20);
            $table->string('college_highest',20);
            $table->string('college_address',20);
            $table->string('collage_name',20);
            $table->string('city_town_c',20);
            $table->string('mandal_c',20);
            $table->string('district_c',20);
            $table->string('state_c',20);
            $table->string('college_address',20);
            $table->string('city_town',20);
            $table->string('mandal',20);
            $table->string('district',20);
            $table->string('state',20);
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
        Schema::dropIfExists('profile');
    }
}
