<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToWebBasedSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_based_softwares', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('web_based_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_based_softwares', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
