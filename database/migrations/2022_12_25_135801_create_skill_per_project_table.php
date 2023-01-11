<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillPerProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_per_project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_skill');
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_skill')->references('id')->on('skills');
            $table->foreign('id_project')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_per_project');
    }
}
