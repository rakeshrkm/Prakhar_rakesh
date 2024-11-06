<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\GisRemoteSensing;
use Illuminate\Http\Request;
use File;

class GisRemoteSensingController extends Controller
{
    public function create(Request $request){
        $gisRemoteSensing = GisRemoteSensing::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.gis_remote_sensing',compact('gisRemoteSensing'));
    }
    
   public function Update(Request $request){
    
    //         // dd($request->id);
    //  $validated = $request->validate([
    //     // meta
    //     'meta_title' => 'required|max:255',
    //     'meta_keywords' => 'required|max:255',
    //     'meta_descriptions' => 'required',
        
    //     'heading_1' => 'required|max:255',
    //     'content_1' => 'required',
    //     'heading_2' => 'required|max:255',
    //     'content_2' => 'required',
    //     'heading_3' => 'required|max:255',
    //     'content_3' => 'required',
    //     'heading_4' => 'required|max:255',
    //     'content_4' => 'required',
    //     'heading_5' => 'required|max:255',
    //     'content_5' => 'required',

    //     'key_benefit_title' => 'required',
    //     'key_benefit_heading_1' => 'required',
    //     'key_benefit_content_1' => 'required',
    //     'key_benefit_heading_2' => 'required',
    //     'key_benefit_content_2' => 'required',
    //     'key_benefit_heading_3' => 'required',
    //     'key_benefit_content_3' => 'required',
    //     'key_benefit_heading_4' => 'required',
    //     'key_benefit_content_4' => 'required',
    //     'key_benefit_heading_5' => 'required',
    //     'key_benefit_content_5' => 'required',
    //     'key_benefit_content_1_2' => 'required',
    //     'key_benefit_content_2_2' => 'required',
    //     'key_benefit_content_3_2' => 'required',
    //     'key_benefit_content_4_2' => 'required',
    //     'key_benefit_content_5_2' => 'required',

        
    //     'choose_us_title' => 'required',
    //     'choose_us_heading_1' => 'required',
    //     'choose_us_content_1' => 'required',
    //     'choose_us_heading_2' => 'required',
    //     'choose_us_content_2' => 'required',
    //     'choose_us_heading_3' => 'required',
    //     'choose_us_content_3' => 'required',
    //     'choose_us_heading_4' => 'required',
    //     'choose_us_content_4' => 'required',
    //     'choose_us_content_1_2' => 'required',
    //     'choose_us_content_2_2' => 'required',
    //     'choose_us_content_3_2' => 'required',
    //     'choose_us_content_4_2' => 'required',
        
        
    //     'faq_title' => 'required',
    //     'faq_heading_1' => 'required',
    //     'faq_content_1' => 'required',
    //     'faq_heading_2' => 'required',
    //     'faq_content_2' => 'required',
    //     'faq_heading_3' => 'required',
    //     'faq_content_3' => 'required',
    //     'faq_heading_4' => 'required',
    //     'faq_content_4' => 'required',
    //     'faq_heading_5' => 'required',
    //     'faq_content_5' => 'required',
    //     'status' => 'required'
    // ]);
    
    // dd('ok');
    

    
    
    $gisRemoteSensing = $request->id ? GisRemoteSensing::find($request->id) : new GisRemoteSensing();
    
    // dd($gisRemoteSensing);
    



    if ($request->file('gis_remote_sensing_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $gisRemoteSensing->gis_remote_sensing_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('gis_remote_sensing_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $gisRemoteSensing->gis_remote_sensing_image;
        }
    
    // Code for FAQ image
        if ($request->is_remote_sensing_faq_image) {
        $faq_image_path = public_path("/uploads/services/" . $gisRemoteSensing->gis_remote_sensing_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('gis_remote_sensing_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $gisRemoteSensing->gis_remote_sensing_faq_image;
        }

         // Code for banner image
         
        //  dd($request->banner_image);
         
        if ($request->file('banner_image')) {
            
            // dd('ok');
            $banner_image_path = public_path("/uploads/banner/" . $gisRemoteSensing->banner_image);
            
           
            
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $gisRemoteSensing->banner_image;
            }
    
        $gisRemoteSensing->fill($request->all());
        $gisRemoteSensing->page_id = 3;
        $gisRemoteSensing->gis_remote_sensing_image = $imgName;
        $gisRemoteSensing->gis_remote_sensing_faq_image = $faqimgName;
        $gisRemoteSensing->banner_image = $bannerimgName;
        $gisRemoteSensing->save();
        return redirect()->route('admin.gis-remote-sensing.create')->with('success', 'Data updated Successfully !');
    }
}
