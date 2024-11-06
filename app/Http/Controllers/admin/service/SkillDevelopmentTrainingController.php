<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\SkillDevelopmentTraining;
use Illuminate\Http\Request;
use File;

class SkillDevelopmentTrainingController extends Controller
{
    public function create(Request $request){
        $skillDev = SkillDevelopmentTraining::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.skill_development_training',compact('skillDev'));
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
        
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        'choose_us_heading_4' => 'required',
        'choose_us_content_4' => 'required',
        
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
    
    $skilDevlopment = $request->id ? SkillDevelopmentTraining::find($request->id) : new SkillDevelopmentTraining();
    if ($request->hasFile('image_skill_development')) {
        // Code for image_skill_development
        $image_path = public_path("/uploads/services/" . $skilDevlopment->image_skill_development);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('image_skill_development');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $skilDevlopment->image_skill_development;
        }
    
    // Code for FAQ image
        if ($request->hasFile('faq_image_skill_development')) {
        $faq_image_path = public_path("/uploads/services/" . $skilDevlopment->faq_image_skill_development);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('faq_image_skill_development');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $skilDevlopment->faq_image_skill_development;
        }

        // code for banner images
        
         // Code for Banner Images
        if ($request->hasFile('banner_image')) {
        $banner_image_path = public_path("/uploads/banner/" . $skilDevlopment->banner_image);
        if (File::exists($banner_image_path)) {
            File::delete($banner_image_path);
        }
    
        $bannerImage = $request->file('banner_image');
        $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $bannerDestinationPath = public_path('/uploads/banner/');
        $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
        } else {
            $bannerimgName = $skilDevlopment->banner_image;
            
        }

    
        $skilDevlopment->fill($request->all());
        $skilDevlopment->page_id = 3;
        $skilDevlopment->image_skill_development = $imgName;
        $skilDevlopment->faq_image_skill_development = $faqimgName;
        $skilDevlopment->banner_image = $bannerimgName;
        $skilDevlopment->save();
        return redirect()->route('admin.skill-development-training.create')->with('success', 'Skill Development & training data updated Successfully !');
    }
}
