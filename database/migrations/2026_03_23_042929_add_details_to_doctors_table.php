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
        Schema::table('doctors', function (Blueprint $table) {
        $table->text('description')->nullable(); // ڈاکٹر کا تعارف
        $table->string('experience')->nullable(); // تجربہ
        $table->string('phone')->nullable(); // فون نمبر (بورڈ سے 0333-5371687)
        $table->string('clinic_address')->default('Noor Clinic'); 
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
        });
    }
};
