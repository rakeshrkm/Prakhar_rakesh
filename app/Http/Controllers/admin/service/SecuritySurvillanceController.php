<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\SecuritySurvillance;
use Illuminate\Http\Request;
use File;

class SecuritySurvillanceController extends Controller
{
    public function create(Request $request){
        $securitySurvillance = SecuritySurvillance::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.security_survillance',compact('securitySurvillance'));
    }
    
     public function Update(Request $request){
        //  dd($request);
         
     $validated = $request->validate([
        // meta
        'meta_title' => 'required|max:255',
        'meta_keywords' => 'required|max:255',
        'meta_descriptions' => 'required',
        'meta_title' => 'required|max:255',
        'meta_keywords' => 'required|max:255',
        'meta_descriptions' => 'required|max:255',
        'heading_1' => 'required|max:255',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',
        'heading_3' => 'required|max:255',
        'content_3' => 'required',
        'heading_4' => 'required|max:255',
        'content_4' => 'required',
        
        'key_benefit_title' => 'required',
        'key_benefit_heading_1' => 'required',
        'key_benefit_content_1' => 'required',
        'key_benefit_heading_2' => 'required',
        'key_benefit_content_2' => 'required',
        'key_benefit_heading_3' => 'required',
        'key_benefit_content_3' => 'required',
        
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
        'status' => 'required'
    ]);
    
    $securitySurvillance = $request->id ? SecuritySurvillance::find($request->id) : new SecuritySurvillance();
    if ($request->hasFile('security_survillance_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $securitySurvillance->security_survillance_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('security_survillance_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $securitySurvillance->security_survillance_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('security_survillance_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $securitySurvillance->image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('security_survillance_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); 
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName);
        } else {
            $faqimgName = $securitySurvillance->security_survillance_faq_image;
        }

        // Code for banner Image image
        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $securitySurvillance->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); 
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); 
            } else {
                $bannerimgName = $securitySurvillance->banner_image;
            }
    
        $securitySurvillance->fill($request->all());
        $securitySurvillance->page_id = 1;
        $securitySurvillance->security_survillance_image = $imgName;
        $securitySurvillance->security_survillance_faq_image = $faqimgName;
        $securitySurvillance->banner_image = $bannerimgName;
        $securitySurvillance->save();
        return redirect()->route('admin.security-survillance.create')->with('success', 'Data updated Successfully !');
    }
}
