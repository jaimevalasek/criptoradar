<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_ratings', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('contents_id')->constrained('contents');
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
        Schema::dropIfExists('content_ratings');
    }
}
