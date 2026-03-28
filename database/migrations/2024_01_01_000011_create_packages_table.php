<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->bigInteger('price')->nullable(); // null = custom price
            $table->string('price_display'); // e.g. "Rp 300rb", "Custom"
            $table->string('badge')->nullable(); // e.g. "BEST SELLER"
            $table->json('features'); // array of feature strings
            $table->string('guarantee')->nullable(); // e.g. "Garansi 1 Bulan"
            $table->string('wa_link')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
