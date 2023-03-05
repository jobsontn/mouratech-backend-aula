<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('enrollment', 30)->unique();
            $table->string('CPF', 14)->unique();
			$table->string('Name');
            $table->string('motherName');
            $table->string('fatherName')->nullable();
            $table->date('birthday');
			$table->string('gender');
			$table->string('email')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('githubProfile')->nullable();
            $table->string('campusName')->nullable();
            $table->string('courseName')->nullable();
            $table->unsignedInteger('currentPeriod');
            $table->unsignedInteger('group');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
