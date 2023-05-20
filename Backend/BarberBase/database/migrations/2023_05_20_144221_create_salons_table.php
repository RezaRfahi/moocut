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
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->time('start')->default('08:00:00');
            $table->time('finish')->default('23:00:00');
            $table->point('map')->nullable()->index('map_index');
            $table->text('breaks')->nullable();
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
