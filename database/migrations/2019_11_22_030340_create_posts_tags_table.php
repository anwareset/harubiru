<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTagsTable extends Migration
{

    public function up()
    {
        Schema::create('posts_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('posts_id');
            $table->integer('tags_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts_tags');
    }
}
