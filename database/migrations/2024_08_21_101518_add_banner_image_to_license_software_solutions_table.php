<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToLicenseSoftwareSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('license_software_solutions', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('license_software_solution_faq_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('license_software_solutions', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
