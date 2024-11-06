<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\HrConsultingServices;
use Illuminate\Http\Request;
use File;

class HrConsultingServicesController extends Controller
{
    public function create(Request $request){
        $hrConsultingService = HrConsultingServices::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.hr_consulting_service',compact('hrConsultingService'));
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
        'heading_5' => 'required|max:255',
        'content_5' => 'required',
        
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
    
    $hrConsultingServices = $request->id ? HrConsultingServices::find($request->id) : new HrConsultingServices();
    if ($request->hasFile('hr_consulting_services_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $hrConsultingServices->hr_consulting_services_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('hr_consulting_services_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $hrConsultingServices->hr_consulting_services_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('hr_consulting_services_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $hrConsultingServices->hr_consulting_services_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('hr_consulting_services_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $hrConsultingServices->hr_consulting_services_faq_image;
        }
    

        // banner images

        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $hrConsultingServices->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $hrConsultingServices->banner_image;
            }
        $hrConsultingServices->fill($request->all());
        $hrConsultingServices->page_id = 3;
        $hrConsultingServices->hr_consulting_services_image = $imgName;
        $hrConsultingServices->hr_consulting_services_faq_image = $faqimgName;
        $hrConsultingServices->banner_image = $bannerimgName;
        $hrConsultingServices->save();
        return redirect()->route('admin.hr-consulting-services.create')->with('success', 'Data updated Successfully !');
    }
}
