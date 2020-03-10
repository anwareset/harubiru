<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAboutColumnInSitesTable extends Migration
{
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->text('about')->change();
        });
    }

    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('about')->change();
        });
    }
}
