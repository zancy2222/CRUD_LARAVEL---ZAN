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
            $table->id();                       // Primary key
            $table->string('name');             // Product name
            $table->text('description')->nullable(); // Product description (nullable)
            $table->decimal('price', 8, 2);     // Price with 8 digits and 2 decimal places
            $table->integer('quantity');        // Product quantity
            $table->timestamps();               // Created and updated timestamps
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
