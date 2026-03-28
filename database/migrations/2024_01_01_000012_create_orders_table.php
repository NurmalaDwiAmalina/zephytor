<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('package_id')->constrained()->onDelete('restrict');
            $table->string('status')->default('pending'); // pending | in_progress | completed | cancelled
            $table->bigInteger('total_price')->nullable();
            $table->text('notes')->nullable();
            $table->json('scope_of_work')->nullable(); // auto-generated scope
            $table->json('agreement_data')->nullable(); // purchase agreement details
            $table->timestamp('agreed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
