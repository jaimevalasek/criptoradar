<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptofolioCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cryptofolio_coins', function (Blueprint $table) {
            $table->unsignedBigInteger('cryptofolios_id');
            $table->unsignedBigInteger('coins_id');

            $table->unique(['cryptofolios_id', 'coins_id']);

            $table->foreign('cryptofolios_id')->references('id')->on('cryptofolios')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('coins_id')->references('id')->on('coins')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cryptofolio_coins');
    }
}
