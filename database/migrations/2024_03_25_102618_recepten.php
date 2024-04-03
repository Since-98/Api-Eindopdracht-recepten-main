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
        Schema::create('recept', function (Blueprint $table) {
            $table->tinyInteger('id')->autoIncrement();
            $table->string('naam', 20)->nullable(false)->unique();
            $table->string('kort_beschrijving', 100)->nullable(false)->unique();
            $table->string('afbeelding', 20)->nullable(false)->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
