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
        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('tel')->unique();
            $table->string('postcode')->unique();
            $table->date('establish');
            $table->string('status')->default(\App\Enum\SalonStatus::open->value);
            $table->time('start')->default('08:00:00');
            $table->time('finish')->default('23:00:00');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('breaks')->nullable();
            $table->unique(['longitude', 'latitude']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salons');
    }
};
