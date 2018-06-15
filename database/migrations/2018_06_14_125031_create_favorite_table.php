<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('user_favorite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('favorite_id')->unsigned()->index();
            $table->timestamps();

            // Foreign key setting
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('favorite_id')->references('id')->on('microposts')->onDelete('cascade');

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_favorite');
    }
}
