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
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->boolean('status')->default(true);
            $table->boolean('featured')->default(false);
            $table->string('featured_img')->nullable();
            $table->json('gall_img')->nullable();
            $table->string('sku')->nullable();
            $table->float('price');
            $table->float('selling_price')->nullable();
            $table->boolean('stock')->default(true);
            $table->mediumText('short_details')->nullable();
            $table->longText('long_details')->nullable();
            $table->longText('additional_info')->nullable();
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
