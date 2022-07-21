<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryInvestReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_invest_reply', function (Blueprint $table) {
            $table->id();
            $table->enum('is_approved', array('0','1'))->default('1');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('diary_invests_id')->constrained('diary_invests');
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
        Schema::dropIfExists('diary_invest_reply');
    }
}
