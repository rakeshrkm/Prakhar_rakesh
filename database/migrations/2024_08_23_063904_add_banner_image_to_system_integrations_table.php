<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToSystemIntegrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('system_integrations', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('system_integration_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('system_integrations', function (Blueprint $table) {
            $table->dropColumn('banner_image');
                });
    }
}
