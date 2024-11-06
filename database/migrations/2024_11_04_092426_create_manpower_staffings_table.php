<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManpowerStaffingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manpower_staffings', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->string('heading_1')->nullable();
            $table->text('content_1')->nullable();
            $table->string('manpower_staffing_image')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_heading_1')->nullable();
            $table->text('service_content_1')->nullable();
            $table->string('service_heading_2')->nullable();
            $table->text('service_content_2')->nullable();
            $table->string('service_heading_3')->nullable();
            $table->text('service_content_3')->nullable();

            $table->string('key_benefit_title')->nullable();
            $table->string('key_benefit_heading_1')->nullable();
            $table->text('key_benefit_content_1')->nullable();
            $table->string('key_benefit_heading_2')->nullable();
            $table->text('key_benefit_content_2')->nullable();
            $table->string('key_benefit_heading_3')->nullable();
            $table->text('key_benefit_content_3')->nullable();
            $table->string('key_benefit_heading_4')->nullable();
            $table->text('key_benefit_content_4')->nullable();          
            
            $table->string('choose_us_title')->nullable();
            $table->string('choose_us_heading_1')->nullable();
            $table->text('choose_us_content_1')->nullable();
            $table->string('choose_us_heading_2')->nullable();
            $table->text('choose_us_content_2')->nullable();
            $table->string('choose_us_heading_3')->nullable();
            $table->text('choose_us_content_3')->nullable();
            $table->string('choose_us_heading_4')->nullable();
            $table->text('choose_us_content_4')->nullable();
            
            $table->string('faq_title')->nullable();
            $table->string('faq_heading_1')->nullable();
            $table->text('faq_content_1')->nullable();
            $table->string('faq_heading_2')->nullable();
            $table->text('faq_content_2')->nullable();
            $table->string('faq_heading_3')->nullable();
            $table->text('faq_content_3')->nullable();
            $table->string('faq_heading_4')->nullable();
            $table->text('faq_content_4')->nullable();
            $table->string('faq_heading_5')->nullable();
            $table->text('faq_content_5')->nullable();
            $table->string('faq_heading_6')->nullable();
            $table->text('faq_content_6')->nullable();
            $table->string('faq_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->enum('status', ['active','inactive'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manpower_staffings');
    }
}