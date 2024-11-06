<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\EGovProject;
use Illuminate\Http\Request;
use File;

class EgovProjectController extends Controller
{
    public function create(Request $request){
        $egovProject = EGovProject::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.e_gov_project',compact('egovProject'));
    }
    
     public function Update(Request $request){
        //  dd($request);
         
     $validated = $request->validate([
        // meta
        'meta_title' => 'required|max:255',
        'meta_keywords' => 'required|max:255',
        'meta_descriptions' => 'required|max:255',


        'heading_1' => 'required|max:255',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',
        'heading_3' => 'required|max:255',
        'content_3' => 'required',
        'content_3_1' => 'required',
        'content_3_2' => 'required',
        'heading_4' => 'required|max:255',
        'content_4' => 'required',
        'content_4_1' => 'required',
        'content_4_2' => 'required',
        'heading_5' => 'required|max:255',
        'content_5' => 'required',
        'content_5_1' => 'required',
        'content_5_2' => 'required',

        'key_benefit_title' => 'required',
        'key_benefit_heading_1' => 'required',
        'key_benefit_content_1' => 'required',
        'key_benefit_heading_2' => 'required',
        'key_benefit_content_2' => 'required',
        'key_benefit_heading_3' => 'required',
        'key_benefit_content_3' => 'required',
        'key_benefit_heading_4' => 'required',
        'key_benefit_content_4' => 'required',
    
        
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
        'status' => 'required'
    ]);
    
    $eGovProject = $request->id ? eGovProject::find($request->id) : new eGovProject();


    if ($request->file('e_gov_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $eGovProject->e_gov_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('e_gov_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $eGovProject->e_gov_image;
        }
    
    // Code for FAQ image
        if ($request->faq_image) {
        $faq_image_path = public_path("/uploads/services/" . $eGovProject->faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $eGovProject->faq_image;
        }

         // Code for banner image

        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $eGovProject->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $eGovProject->banner_image;
            }
    
        $eGovProject->fill($request->all());
        $eGovProject->e_gov_image = $imgName;
        $eGovProject->faq_image = $faqimgName;
        $eGovProject->banner_image = $bannerimgName;
        $eGovProject->save();
        
        return redirect()->route('admin.e-gov-profect.create')->with('success', 'Data updated Successfully !');
    }
}
