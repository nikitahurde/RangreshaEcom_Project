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
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->string('description')->nullable();
            $table->decimal('sale_price',8,2)->nullable();
            $table->decimal('price',8,2)->nullable();
            $table->decimal('mrp',8,2)->nullable();
            $table->string('sku');
            $table->enum('stock_status',['instock','outofstock']);
            $table->string('featured')->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->string('image');
            $table->text('images');
            $table->bigInteger('category_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
