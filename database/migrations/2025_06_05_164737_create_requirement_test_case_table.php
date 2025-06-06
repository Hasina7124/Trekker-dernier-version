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
        Schema::create('requirement_test_case', function (Blueprint $table) {
            $table->foreignId('requirement_id')
                ->constrained('requirements')
                ->onDelete('cascade');
            $table->foreignId('test_case_id')
                ->constrained('test_cases')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirement_test_case');
    }
};
