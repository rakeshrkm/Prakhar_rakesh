<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\SitcDrone;
use Illuminate\Http\Request;
use File;

class SitcDroneController extends Controller
{
    public function create(Request $request){
        $sitcDrone = SitcDrone::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.sitcDrone',compact('sitcDrone'));
    }
    
     public function Update(Request $request){
     $validated = $request->validate([
        // meta
        'meta_title' => 'required|max:255',
        'meta_keywords' => 'required|max:255',
        'meta_descriptions' => 'required',
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
        'key_benefit_content_1_2' => 'required',
        'key_benefit_content_2_2' => 'required',
        'key_benefit_content_3_2' => 'required',
        'key_benefit_content_4_2' => 'required',
        'key_benefit_content_5_2' => 'required',
        
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        'choose_us_heading_4' => 'required',
        'choose_us_content_4' => 'required',
        'choose_us_content_1_2' => 'required',
        'choose_us_content_2_2' => 'required',
        'choose_us_content_3_2' => 'required',
        'choose_us_content_4_2' => 'required',
        
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
    
    $sitcDrone = $request->id ? SitcDrone::find($request->id) : new SitcDrone();
    if ($request->hasFile('sitc_image_sec_1')) {
        // Code for sitc_image_sec_1
        $image_path = public_path("/uploads/services/" . $sitcDrone->sitc_image_sec_1);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $sitcSecOneImage = $request->file('sitc_image_sec_1');
        $imgName = time() . "_" . $sitcSecOneImage->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $sitcSecOneImage->move($destinationPath, $imgName);
        } else {
            $imgName = $sitcDrone->sitc_image_sec_1;
        }
    
    // Code for FAQ image
        if ($request->hasFile('faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $sitcDrone->faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $sitcDrone->faq_image;
        }

        // code for banner images


        // Code for FAQ image
        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $sitcDrone->banner_images);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $sitcDrone->banner_image;
            }
    
        $sitcDrone->fill($request->all());
        $sitcDrone->faq_image = $faqimgName;
        $sitcDrone->page_id = 3;
        $sitcDrone->sitc_image_sec_1 = $imgName;
        $sitcDrone->banner_image = $bannerimgName;
        $sitcDrone->save();

        return redirect()->route('admin.sitc-drone.create')->with('success', 'Sitc Drone data updated Successfully !');
    }
}
