<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugColumnInPostsTable extends Migration
{

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug');
        });
    }

    public function down()
    {
        //
    }
}
