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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('titre')->nullable();
            $table->string('poste_actuel')->nullable();
            $table->string('industrie')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('autre_contact')->nullable();
            $table->text('a_propos')->nullable();
            $table->string('cv')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
