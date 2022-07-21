<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSignalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_signals', function (Blueprint $table) {
            $table->id();
            $table->double('value', 10, 8);
            $table->string('description');
            $table->smallInteger('target')->nullable();
            $table->smallInteger('stop');
            $table->foreignId('products_id')->constrained('products');
            $table->integer('views')->nullable();
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
        Schema::dropIfExists('product_signals');
    }
}
