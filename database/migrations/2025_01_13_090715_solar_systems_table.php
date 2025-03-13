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
        Schema::create('solar_systems', function (Blueprint $table) {
            $table->id();  // Voeg een auto-incrementing ID toe
            $table->string('name');  // Naam van het zonnestelsel
            $table->timestamps();  // Voeg created_at en updated_at timestamps toe
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solar_systems');  // Verwijder de tabel als je de migration terugdraait
    }
};

