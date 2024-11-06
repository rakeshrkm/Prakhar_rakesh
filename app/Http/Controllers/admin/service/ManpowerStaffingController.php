<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\ManpowerStaffing;
use Illuminate\Http\Request;
use File;

class ManpowerStaffingController extends Controller
{
    public function create(Request $request){
        $manpowerStaffing = ManpowerStaffing::where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.manpower_staffing',compact('manpowerStaffing'));
    }
    
     public function Update(Request $request){
     $validated = $request->validate([
        // meta
        'meta_title' => 'required|max:255',
        'meta_keywords' => 'required|max:255',
        'meta_descriptions' => 'required',
        
        'heading_1' => 'required|max:255',
        'content_1' => 'required',

        'service_title' => 'required|:max:255',
        'service_heading_1' => 'required',
        'service_content_1' => 'required',
        'service_heading_2' => 'required',
        'service_content_2' => 'required',
        'service_heading_3' => 'required',
        'service_content_3' => 'required',

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
    
    // dd('ok');

    $manpowerStaffing = $request->id ? ManpowerStaffing::find($request->id) : new ManpowerStaffing();
    // dd($request->id);

    if ($request->hasFile('manpower_staffing_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $manpowerStaffing->manpower_staffing_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('manpower_staffing_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $manpowerStaffing->manpower_staffing_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $manpowerStaffing->faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $manpowerStaffing->faq_image;
        }

        // Code for Banner Image
        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $manpowerStaffing->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $manpowerStaffing->banner_image;
            }
    
        $manpowerStaffing->fill($request->all());
        $manpowerStaffing->manpower_staffing_image = $imgName;
        $manpowerStaffing->faq_image = $faqimgName;
        $manpowerStaffing->banner_image = $bannerimgName;
        $manpowerStaffing->save();
        return redirect()->route('admin.manpower-staffing.create')->with('success', 'Data updated Successfully !');
    }
}
