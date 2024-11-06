<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToItHardwaresAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('it_hardwares_accessories', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('it_hardware_ass_faq_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('it_hardwares_accessories', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
