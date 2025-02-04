<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            //candidate table that extends users table
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('work_type_id')->nullable();
            $table->string('location')->nullable();
            $table->string('image_path')->nullable();
            $table->string('phone')->nullable();
            $table->integer('availability_id')->nullable();
            $table->text('preference')->nullable();
            $table->double('Salary_expectation')->nullable();
            $table->string('language_id')->nullable();
            $table->foreignId('job_function_id')->constrained();
            $table->string('gender_id')->nullable();
            $table->string('professional_headline')->nullable();
            $table->string('years_experience')->nullable();
            $table->strin('experience_level')->nullable();
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
        Schema::dropIfExists('candidates');
    }
};
