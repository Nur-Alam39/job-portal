<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
                        
            $table->string('degree_name');
            $table->string('subject');
            $table->text('institute');
            $table->string('location');
            $table->date('passing_year');
            $table->string('result');
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
        Schema::dropIfExists('education');
    }
}
