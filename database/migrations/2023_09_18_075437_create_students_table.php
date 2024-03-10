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
            $table->string('Student_id','100');
            $table->string('Fullname','100');
            $table->string('Address','100');
            $table->string('Phone','100');
            $table->string('Class','100');
            $table->string('Roll','100');
            $table->string('Email','100');
            $table->string('Password','100');
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
