<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\AntiDrone;
use Illuminate\Http\Request;
use File;

class AntiDroneController extends Controller
{
    public function create(Request $request){
        $antiDrone = AntiDrone::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.AntiDrone',compact('antiDrone'));
    }
    
     public function Update(Request $request){
     $validated = $request->validate([
        'heading_1' => 'required|max:255',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',
        'heading_3' => 'required|max:255',
        'content_3' => 'required',
        
        'key_benefit_title' => 'required',
        'key_benefit_heading_1' => 'required',
        'key_benefit_content_1' => 'required',
        'key_benefit_heading_2' => 'required',
        'key_benefit_content_2' => 'required',
        'key_benefit_heading_3' => 'required',
        'key_benefit_content_3' => 'required',
        'key_benefit_heading_4' => 'required',
        'key_benefit_content_4' => 'required',
        'key_benefit_heading_5' => 'required',
        'key_benefit_content_5' => 'required',
        
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        
        'faq_title' => 'required',
        'faq_heading_1' => 'required',
        'faq_content_1' => 'required',
        'faq_heading_2' => 'required',
        'faq_content_2' => 'required',
        'faq_heading_3' => 'required',
        'faq_content_3' => 'required',
        'faq_heading_4' => 'required',
        'faq_content_4' => 'required',
        'faq_heading_5' => 'required',
        'faq_content_5' => 'required',
        'faq_heading_6' => 'required',
        'faq_content_6' => 'required',
        'status' => 'required'
    ]);
    
    $antiDrone = $request->id ? AntiDrone::find($request->id) : new AntiDrone();
    
    if ($request->hasFile('anti_drone_image')) {
        // Code for anti_drone_image
        $image_path = public_path("/uploads/services/" . $antiDrone->anti_drone_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $antiDroneImage = $request->file('anti_drone_image');
        $imgName = time() . "_" . $antiDroneImage->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $antiDroneImage->move($destinationPath, $imgName);
        } else {
            $imgName = $antiDrone->anti_drone_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('anti_drone_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $antiDrone->anti_drone_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('anti_drone_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $antiDrone->anti_drone_faq_image;
        }
        
        
        // Code for Banner Images
        if ($request->hasFile('banner_image')) {
        $banner_image_path = public_path("/uploads/banner/" . $antiDrone->banner_image);
        if (File::exists($banner_image_path)) {
            File::delete($banner_image_path);
        }
    
        $bannerImage = $request->file('banner_image');
        $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $bannerDestinationPath = public_path('/uploads/banner/');
        $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
        } else {
            $bannerimgName = $antiDrone->banner_image;
            
        }
    
        $antiDrone->fill($request->all());
        $antiDrone->anti_drone_image  = $imgName;
        $antiDrone->page_id = 3;
        $antiDrone->anti_drone_faq_image = $faqimgName;
        $antiDrone->banner_image = $bannerimgName;
        $antiDrone->save();

        return redirect()->route('admin.anti-drone.create')->with('success', 'Anti Drone data updated Successfully !');
    }
}
