<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToSkillItRecruitments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skill_it_recruitments', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('it_recruitment_faq_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skill_it_recruitments', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
