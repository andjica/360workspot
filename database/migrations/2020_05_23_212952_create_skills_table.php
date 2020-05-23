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
            $table->string('skill_one')->nullable();;
            $table->integer('percent_one')->nullable();;
            $table->string('skill_two')->nullable();;
            $table->integer('percent_two')->nullable();;
            $table->string('skill_three')->nullable();;
            $table->integer('percent_three')->nullable();;
            $table->string('skill_four')->nullable();;
            $table->integer('percent_four')->nullable();;
            $table->string('skill_five')->nullable();;
            $table->integer('percent_five')->nullable();;
            $table->string('skill_six')->nullable();;
            $table->integer('percent_six')->nullable();;
            $table->string('skill_seven')->nullable();;
            $table->integer('percent_seven')->nullable();;
            $table->string('skill_eight')->nullable();;
            $table->integer('percent_eight')->nullable();;
            $table->string('skill_nine')->nullable();;
            $table->integer('percent_nine')->nullable();;
            $table->string('skill_ten')->nullable();;
            $table->integer('percent_ten')->nullable();;
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
