<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToScanningDigitizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scanning_digitizations', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('scanning_digitization_faq_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scanning_digitizations', function (Blueprint $table) {
            $table->dropColum('banner_image');
        });
    }
}
