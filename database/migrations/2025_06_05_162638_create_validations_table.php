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
        Schema::create('validations', function (Blueprint $table) {
            $table->id();
            $table->date('date_validation');
            $table->text('commentaire')->nullable();
            $table->foreignId('chef_projet_id')
                ->constrained('chef_projets')
                ->onDelete('cascade');
            // Selon ce que la validation concerne, on ajoute nullable() sur les clés étrangères
            $table->foreignId('requirement_id')
                ->nullable()
                ->constrained('requirements')
                ->onDelete('cascade');
            $table->foreignId('test_case_id')
                ->nullable()
                ->constrained('test_cases')
                ->onDelete('cascade');
            $table->foreignId('client_id')
                ->nullable()
                ->constrained('clients')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
