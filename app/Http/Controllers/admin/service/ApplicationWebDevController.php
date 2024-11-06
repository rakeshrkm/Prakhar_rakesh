<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\ApplicationWebDev;
use Illuminate\Http\Request;
use File;

class ApplicationWebDevController extends Controller
{
    public function create(Request $request){
        $applicationWeb = ApplicationWebDev::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.application_web_dev',compact('applicationWeb'));
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
        'key_benefit_heading_6' => 'required',
        'key_benefit_content_6' => 'required',
        'key_benefit_content_1_2' => 'required',
        'key_benefit_content_2_2' => 'required',
        'key_benefit_content_3_2' => 'required',
        'key_benefit_content_4_2' => 'required',
        'key_benefit_content_5_2' => 'required',
        'key_benefit_content_6_2' => 'required',
        
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        'choose_us_heading_4' => 'required',
        'choose_us_content_4' => 'required',
         'choose_us_heading_5' => 'required',
        'choose_us_content_5' => 'required',
        'choose_us_heading_6' => 'required',
        'choose_us_content_6' => 'required',
        'choose_us_content_1_2' => 'required',
        'choose_us_content_2_2' => 'required',
        'choose_us_content_3_2' => 'required',
        'choose_us_content_4_2' => 'required',
        'choose_us_content_5_2' => 'required',
        'choose_us_content_6_2' => 'required',
        
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
        'status' => 'required',
        'banner_image' => 'mimes:jpg,png,webp',
        'app_web_image' => 'mimes:jpg,png,webp'
    ]);

//   dd($request->id);



    
    $webAppDev = $request->id ? ApplicationWebDev::find($request->id) : new ApplicationWebDev();
    if ($request->file('app_web_image')) {
        // Code for app_web_image
        $image_path = public_path("/uploads/services/" . $webAppDev->app_web_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('app_web_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $webAppDev->app_web_image;
        }
    
    // Code for FAQ image
        if ($request->file('app_web_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $webAppDev->app_web_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('app_web_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $webAppDev->app_web_faq_image;
        }

        // code for banner image

        // Code for FAQ image


// dd($request->file('banner_image'));

        if ($request->file('banner_image')) {

            $banner_image_path = public_path("/uploads/banner/" . $webAppDev->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $webAppDev->banner_image;
            }
    
        $webAppDev->fill($request->all());
        $webAppDev->page_id = 3;
        $webAppDev->app_web_image = $imgName;
        $webAppDev->app_web_faq_image = $faqimgName;
        $webAppDev->banner_image = $bannerimgName;
        $webAppDev->save();
        return redirect()->route('admin.application-web-development.create')->with('success', 'Data updated Successfully !');
    }
}
