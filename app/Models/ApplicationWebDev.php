<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationWebDev extends Model
{
    use HasFactory;
    protected $table = "application_web_developments";
    protected $fillable = ['*'];
    // protected $guarded = [];

}
