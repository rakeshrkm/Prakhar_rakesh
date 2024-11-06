<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToSitcDronesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sitc_drones', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('sitc_image_sec_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sitc_drones', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
