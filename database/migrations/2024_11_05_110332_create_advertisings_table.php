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
        Schema::create('advertisings', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->index();
            $table->string('name');
            $table->string('image_desktop_url');
            $table->string('image_mobile_url');
            $table->boolean('is_active')->default(true);
            $table->string('promotion_url')->nullable();
            $table->integer('order')->default(1);
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisings');
    }
};
