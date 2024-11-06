<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToApplicationWebDevelopments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_web_developments', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('app_web_faq_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_web_developments', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
