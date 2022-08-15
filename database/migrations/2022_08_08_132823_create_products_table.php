<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('usage_description');
            $table->decimal('cost');
            $table->string('slug');
            $table->string('image_path');
            $table->foreignId('product_category_id');
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
