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
            $table->integer('category_id')->unsigned()->nullable(); #unsigned=> não pode ser negativo
            $table->string('name');
            $table->decimal('price', 11, 2); #saída => 99999999999.99
            $table->integer('minimum_quantity');
            $table->text('description'); //text => maior que string
            $table->text('instructions');
            $table->string('url_image');
            $table->text('link_file');
            $table->boolean('active');
            $table->boolean('featured');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');
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
