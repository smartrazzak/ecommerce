<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('eng_name');
            $table->string('bang_name');
            $table->text('description')->nullable();
            $table->string('size')->nullable();
            $table->string('discount')->nullable();
            $table->integer('pro_code')->uniqid();
            $table->integer('quantity')->nullable();;
            $table->decimal('price',20,2);
            $table->string('image')->nullable();;
            $table->foreignId('cate_id')->constrained('categories');
            $table->foreignId('subcate_id')->constrained('sub_categories');
            $table->foreignId('brand_id')->constrained('brands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
