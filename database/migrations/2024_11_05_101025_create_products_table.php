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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('external_id')->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->boolean('is_active')->default(true);
            $table->foreignId('category_id')->constrained('categories');
            $table->integer('review_quantity')->default(0);
            $table->decimal('rating_average', 2, 1)->default(0);
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('products');
    }
};
