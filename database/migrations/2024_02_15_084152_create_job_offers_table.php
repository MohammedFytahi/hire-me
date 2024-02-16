<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable(); // Ajoutez 'company_id' comme colonne étrangère, autorisée à être nulle
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->text('required_skills');
            $table->unsignedInteger('visits')->default(0);
            $table->enum('contract_type', ['remote', 'hybrid', 'full_time']);
            $table->string('location');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
