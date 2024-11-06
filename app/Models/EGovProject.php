<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EGovProject extends Model
{
    use HasFactory;

    protected $table = 'e_gov_projects';

    protected $fillable =[
        'meta_title',
        'meta_keywords',
        'meta_descriptions',
        'heading_1',
        'content_1',
        'heading_2',
        'content_2',
        'heading_3',
        'content_3',
        'content_3_1',
        'content_3_2',
        'heading_4',
        'content_4',
        'content_4_1',
        'content_4_2',
        'heading_5',
        'content_5',
        'content_5_1',
        'content_5_2',
        'e_gov_image',
        'key_benefit_title',
        'key_benefit_heading_1',
        'key_benefit_content_1',
        'key_benefit_heading_2',
        'key_benefit_content_2',
        'key_benefit_heading_3',
        'key_benefit_content_3',
        'key_benefit_heading_4',
        'key_benefit_content_4',
        'choose_us_title',
        'choose_us_heading_1',
        'choose_us_content_1',
        'choose_us_heading_2',
        'choose_us_content_2',
        'choose_us_heading_3',
        'choose_us_content_3',
        'faq_title',
        'faq_heading_1',
        'faq_content_1',
        'faq_heading_2',
        'faq_content_2',
        'faq_heading_3',
        'faq_content_3',
        'faq_heading_4',
        'faq_content_4',
        'faq_heading_5',
        'faq_content_5',
        'faq_image',
        'banner_image',
        'status'
    ];
}
