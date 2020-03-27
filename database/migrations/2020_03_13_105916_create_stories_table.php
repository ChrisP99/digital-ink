<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title', 100);
            $table->string('genre');
            $table->text('blurb');
            $table->text('content')->nullable();
            $table->string('cover_image');
            $table->string('file_upload')->nullable();
            $table->boolean('published')->default('0');
            //TODO: Add Hashing
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
        Schema::dropIfExists('stories');
    }
}
