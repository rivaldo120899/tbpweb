<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_lecturers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lecturer_id');
            $table->foreignId('classroom_id');
            $table->integer('no')->nullable();
            $table->timestamps();

            $table->foreign('lecturer_id')->references('id')->on('lecturers');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_lecturers');
    }
}
