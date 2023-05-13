<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
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
            $table->string('name')->comment('name product');
            $table->string('slug');
            $table->string('quantity');
            $table->string('sold_quantity')->default(0)->comment('số lượng đã bán');
            $table->string('thumbnail')->nullable();
            $table->integer('status')->default(1);
            $table->text('description')->nullable();
            $table->integer('price')->default(0);
            $table->integer('original_price')->default(0);
            $table->tinyInteger('is_hot')->default(0);
            $table->unsignedBigInteger('author_id');
            $table->dateTime('published_date')->useCurrent();
            $table->string('sku')->unique()->nullable();
            $table->integer('order')->default(0);
            $table->softDeletes();
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
