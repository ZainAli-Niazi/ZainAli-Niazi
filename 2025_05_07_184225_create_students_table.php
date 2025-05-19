<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year');
            $table->string('class');
            $table->string('section');
            $table->string('admission_id')->nullable();
            $table->date('admission_date');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('religion')->nullable();
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('country');
            $table->text('address');
            $table->string('photo');
            $table->string('birth_certificate');
            $table->string('parent_id_proof')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
