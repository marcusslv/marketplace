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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->string('external_id')->index()->unique();
            $table->string('slug')->unique();
            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('image_url');
            $table->integer('max_installment');
            $table->integer('max_installment_without_fee');
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->timestamp('last_updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
