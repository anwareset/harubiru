<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnInSitesTable extends Migration
{
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->text('about')->nullable()->change();
            $table->text('contact')->nullable();
            $table->text('contribute')->nullable();
            $table->text('heroes')->nullable();
            $table->text('license')->nullable();
            $table->text('privacypolicy')->nullable();
            $table->text('report')->nullable();
            $table->text('patched')->nullable();
        });
    }

    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->text('about')->change();
            $table->dropColumn([
                'contact',
                'contribute',
                'heroes',
                'license',
                'privacypolicy',
                'report',
                'patched'
            ]);
        });
    }
}
