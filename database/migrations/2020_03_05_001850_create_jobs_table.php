<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('city_id')->unsigned()->index();
            $table->string('title');
            $table->text('title_two')->nullable();
            $table->text('title_three')->nullable();
            $table->text('description');
            $table->text('description_two')->nullable();
            $table->text('company_name');
            $table->boolean('fulltime');
            $table->boolean('partime');
            $table->boolean('intership');
            $table->boolean('temporary');
            $table->boolean('freelance');
            $table->boolean('fixed');
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('url');
            $table->dateTime('expires');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
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
        Schema::dropIfExists('jobs');
    }
}
