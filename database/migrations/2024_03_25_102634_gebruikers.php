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
        Schema::create('gebruikers', function (Blueprint $table) {
            $table->tinyInteger('id')->autoIncrement();
            $table->string('naam', 50)->nullable(false);
            $table->tinyInteger('recept_id');
            $table->string('telefoon', 20)->nullable(true);
            $table->string('email', 50)->nullable(true);


            $table->foreign('recept_id')->references('id')->on('recepten')->restrictOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gebruikers');
    }
};
