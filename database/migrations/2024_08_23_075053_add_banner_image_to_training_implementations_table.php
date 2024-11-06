<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerImageToTrainingImplementationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_implementations', function (Blueprint $table) {
            $table->string('banner_image')->nullable()->after('training_implementation_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_implementations', function (Blueprint $table) {
            $table->dropColumn('banner_image');
        });
    }
}
