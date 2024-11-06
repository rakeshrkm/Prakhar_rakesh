<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\DroneTechnology;
use Illuminate\Http\Request;
use File;


class DroneTechnologyController extends Controller
{
    
    public function create(Request $request){
        $droneTechnology = DroneTechnology::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.drone_technology',compact('droneTechnology'));
    }
    
     public function Update(Request $request){

        // dd($request);



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
      
        
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        'choose_us_content_1_2' => 'required',
        'choose_us_content_2_2' => 'required',
        'choose_us_content_3_2' => 'required',
      

        
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
    

  

    $DroneTechnology = $request->id ? DroneTechnology::find($request->id) : new DroneTechnology();

    // dd($DroneTechnology);


    if ($request->hasFile('drone_image')) {
        // Code for corporate_training_image
        $image_path = public_path("/uploads/services/" . $DroneTechnology->drone_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('drone_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $DroneTechnology->drone_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $DroneTechnology->faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $DroneTechnology->faq_image;
        }

        // Code for banner Images

        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $DroneTechnology->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $DroneTechnology->banner;
            }

    
        $DroneTechnology->fill($request->all());
        $DroneTechnology->drone_image = $imgName;
        $DroneTechnology->faq_image = $faqimgName;
        $DroneTechnology->banner_image = $bannerimgName;
        $DroneTechnology->save();
        return redirect()->route('admin.drone-technology.create')->with('success', 'Data updated Successfully !');
    }
}
