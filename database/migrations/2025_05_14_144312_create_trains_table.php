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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company");
            $table->string("departure_station");
            $table->string("arrival_station");
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->string("train_code");
            $table->integer("carriages_number");
            $table->boolean("is_on_time");
            $table->boolean("is_cancelled");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
