<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLogoColumnInSitesTable extends Migration
{
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('logo');
        });
    }

    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            //
        });
    }
}
