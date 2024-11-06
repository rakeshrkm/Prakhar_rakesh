<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutSection;
use App\Models\HomeFirstSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['banner'] = HomeFirstSection::where('page_id',1)->first();
        $data['about'] = HomeAboutSection::where('page_id',1)->first();

     //   print_r($data);die;
        return view('front.index', compact('data'));
    }
}
