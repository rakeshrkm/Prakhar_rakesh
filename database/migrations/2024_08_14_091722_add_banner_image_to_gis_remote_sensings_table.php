<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToGisRemoteSensingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gis_remote_sensings', function (Blueprint $table) {
            $table->string('banner_image')->after('gis_remote_sensing_faq_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gis_remote_sensings', function (Blueprint $table) {
            $table->dropcolumn('banner_image');
        });
    }
}
