<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersIdColumnInPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('user_id', 'users_id');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
