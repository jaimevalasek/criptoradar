<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryInvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_invests', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->smallInteger('status');
            $table->double('invest_value', 10, 4);
            $table->double('return_value', 10, 4)->nullable();
            $table->integer('rating')->nullable();
            $table->enum('is_approved', array('0','1'))->default('1'); /* usado somente em caso de spam */
            $table->enum('fail', array('0','1'))->default('0'); /* em caso de falha da estratégia 1 para fail */
            $table->enum('public', array('0','1'))->default('0'); /* usado para que seja publico em no site */
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('diary_invest_types_id')->constrained('diary_invest_types');
            $table->foreignId('diary_invest_coins_id')->constrained('diary_invest_coins');
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
        Schema::dropIfExists('diary_invests');
    }
}
