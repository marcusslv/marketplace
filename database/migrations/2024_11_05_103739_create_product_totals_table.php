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
        Schema::create('product_totals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->integer('available')->default(0);
            $table->integer('quantity_sales')->default(0);
            $table->integer('chargebacks')->default(0);
            $table->integer('devolution')->default(0);
            $table->integer('cancellations')->default(0);
            $table->integer('total_abandonment')->default(0);
            $table->timestamp('last_updated_at')->nullable();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_totals');
    }
};
