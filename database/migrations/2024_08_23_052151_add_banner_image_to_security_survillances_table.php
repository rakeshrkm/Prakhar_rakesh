<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToSecuritySurvillancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('security_survillances', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('security_survillance_faq_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('security_survillances', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
