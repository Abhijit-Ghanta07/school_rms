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
        Schema::create('student_fee_recodes', function (Blueprint $table) {
            $table->id();
            $table->string('Student_id','100');
            $table->string('Student_name','100');
            $table->string('Student_class','100');
            $table->string('January','100')->default('0');
            $table->string('Febuary','100')->default('0');
            $table->string('March','100')->default('0');
            $table->string('April','100')->default('0');
            $table->string('May','100')->default('0');
            $table->string('June','100')->default('0');
            $table->string('July','100')->default('0');
            $table->string('August','100')->default('0');
            $table->string('September','100')->default('0');
            $table->string('October','100')->default('0');
            $table->string('November','100')->default('0');
            $table->string('December','100')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_fee_recodes');
    }
};
