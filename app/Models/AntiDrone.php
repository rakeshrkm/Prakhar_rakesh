<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntiDrone extends Model
{
    use HasFactory;
    protected $table = "anti_drones";
    // protected $fillable = [*];
    protected $guarded = [];

}
