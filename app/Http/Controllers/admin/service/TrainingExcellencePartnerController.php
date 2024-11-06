<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\TrainingExcellencePartner;
use Illuminate\Http\Request;
use File;

class TrainingExcellencePartnerController extends Controller
{
    public function create(Request $request){
        $trainingExcellence = TrainingExcellencePartner::where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.training_excellence_partner',compact('trainingExcellence'));
    }
    
     public function update(Request $request){

    
     $validated = $request->validate([
        // meta
        'meta_title' => 'required|max:255',
        'meta_keywords' => 'required|max:255',
        'meta_descriptions' => 'required',
        
        'heading_1' => 'required|max:255',
        'content_1' => 'required',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',
        'heading_3' => 'required|max:255',
        'content_3' => 'required',
        
        'key_benefit_title' => 'required',
        'key_benefit_heading_1' => 'required',
        'key_benefit_content_1' => 'required',
        // 'key_benefit_content_1_2' => 'required',
        'key_benefit_heading_2' => 'required',
        'key_benefit_content_2' => 'required',
        // 'key_benefit_content_2_2' => 'required',
        'key_benefit_heading_3' => 'required',
        'key_benefit_content_3' => 'required',
        // 'key_benefit_content_3_2' => 'required',
        'key_benefit_heading_4' => 'required',
        'key_benefit_content_4' => 'required',
        // 'key_benefit_content_4_2' => 'required',
        'key_benefit_heading_5' => 'required',
        'key_benefit_content_5' => 'required',
        // 'key_benefit_content_5_2' => 'required',

      
        'choose_us_title' => 'required',
        'choose_us_heading_1' => 'required',
        'choose_us_content_1' => 'required',
        'choose_us_content_1_2' => 'required',
        'choose_us_heading_2' => 'required',
        'choose_us_content_2' => 'required',
        'choose_us_content_2_2' => 'required',
        'choose_us_heading_3' => 'required',
        'choose_us_content_3' => 'required',
        'choose_us_content_3_2' => 'required',
        'choose_us_heading_4' => 'required',
        'choose_us_content_4' => 'required',
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


    $trainingExcellence = $request->id ? TrainingExcellencePartner::find($request->id) : new TrainingExcellencePartner();
  

    if ($request->hasFile('training_excellence_partner_image')) {

        // dd($request->id);

        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $trainingExcellence->training_excellence_partner_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('training_excellence_partner_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $trainingExcellence->training_excellence_partner_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $trainingExcellence->faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $trainingExcellence->faq_image;
        }

        // Code for Banner Image
        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $trainingExcellence->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $trainingExcellence->banner_image;
            }
    
        $trainingExcellence->fill($request->all());
        $trainingExcellence->training_excellence_partner_image = $imgName;
        $trainingExcellence->faq_image = $faqimgName;
        $trainingExcellence->banner_image = $bannerimgName;
        $trainingExcellence->save();

        return redirect()->back()->with('success', 'Data updated Successfully !');
    }
}
