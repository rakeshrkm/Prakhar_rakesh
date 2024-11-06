<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToHrConsultingServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hr_consulting_services', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('hr_consulting_services_faq_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hr_consulting_services', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
