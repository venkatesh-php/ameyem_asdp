<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->number('html',10);
            $table->number('css',10);
            $table->number('php',10);
            $table->number('javascript',10);
            $table->number('jquery',10);
            $table->number('java',10);
            $table->number('c++',10);
            $table->number('C',10);
            $table->number('python',10);
            $table->number('c#',10);
            $table->number('matlab',10);
            $table->number('android',10);
            $table->number('ios',10);
            $table->number('windows',10);
            $table->number('embedded_c',10);
            $table->number('embedded_python',10);
            $table->number('assembly',10);
            $table->number('microcontroller',10);
            $table->number('ide',10);
            $table->number('eclipse',10);
            $table->number('netbeans',10);
            $table->number('visual_studio',10);
            $table->number('arduino',10);            
            $table->number('avr_studio',10);
            $table->number('agility',10);
            $table->number('project_management',10);
            $table->number('crud',10);            
            $table->number('restful_api',10);
            $table->number('analytics',10);
            $table->number('big_data',10);
            $table->number('networking',10);
            $table->number('machine_learning',10);
            $table->number('artificial_intelligence',10);
            $table->number('natural_lang_processing',10);            
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
        Schema::dropIfExists('skills');
    }
}
