<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\SystemIntegration;
use Illuminate\Http\Request;
use File;

class SystemIntegrationDataServiceController extends Controller
{
    public function create(Request $request){
        $systemIntegration = SystemIntegration::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.system_integration_data_service',compact('systemIntegration'));
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
    
    $systemInt = $request->id ? SystemIntegration::find($request->id) : new SystemIntegration();
    if ($request->hasFile('system_integration_image')) {
        // Code for system_integration_image
        $image_path = public_path("/uploads/services/" . $systemInt->system_integration_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('system_integration_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $systemInt->system_integration_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('system_integration_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $systemInt->system_integration_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('system_integration_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $systemInt->system_integration_faq_image;
        }

    // Code for banner images

    if ($request->hasFile('banner_image')) {
        $banner_image_path = public_path("/uploads/banner/" . $systemInt->banner_image);
        if (File::exists($banner_image_path)) {
            File::delete($banner_image_path);
        }
    
        $bannerImage = $request->file('banner_image');
        $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); 
        $bannerDestinationPath = public_path('/uploads/banner/');
        $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
        } else {
            $bannerimgName = $systemInt->banner_image;
        }
    
        $systemInt->fill($request->all());
        $systemInt->page_id = 3;
        $systemInt->system_integration_image = $imgName;
        $systemInt->system_integration_faq_image = $faqimgName;
        $systemInt->banner_image = $bannerimgName;
        $systemInt->save();
        return redirect()->route('admin.system-integration-data-service.create')->with('success', 'Data updated Successfully !');
    }
}
