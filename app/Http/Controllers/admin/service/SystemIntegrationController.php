<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\SystemIntegration;
use Illuminate\Http\Request;
use File;

class SystemIntegrationController extends Controller
{
    public function create(Request $request){
        $systemInt = SystemIntegration::where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.system_integration',compact('systemInt'));
    }
    
     public function Update(Request $request){
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
        'key_benefit_content_1_2' => 'required',
        'key_benefit_heading_2' => 'required',
        'key_benefit_content_2' => 'required',
        'key_benefit_content_2_2' => 'required',
        'key_benefit_heading_3' => 'required',
        'key_benefit_content_3' => 'required',
        'key_benefit_content_3_2' => 'required',
        'key_benefit_heading_4' => 'required',
        'key_benefit_content_4' => 'required',
        'key_benefit_content_4_2' => 'required',
        'key_benefit_heading_5' => 'required',
        'key_benefit_content_5' => 'required',
        'key_benefit_content_5_2' => 'required',
        'key_benefit_heading_6' => 'required',
        'key_benefit_content_6' => 'required',
        'key_benefit_content_6_2' => 'required',
        

      
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
        'choose_us_heading_5' => 'required',
        'choose_us_content_5' => 'required',
        'choose_us_content_5_2' => 'required',
        'choose_us_heading_6' => 'required',
        'choose_us_content_6' => 'required',
        'choose_us_content_6_2' => 'required',
        'choose_us_heading_7' => 'required',
        'choose_us_content_7' => 'required',
        'choose_us_content_7_2' => 'required',
        
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
    
    $systemIntegration = $request->id ? SystemIntegration::find($request->id) : new SystemIntegration();
    // dd($request->id);

    if ($request->hasFile('system_integration_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $systemIntegration->system_integration_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('system_integration_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $systemIntegration->system_integration_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $systemIntegration->faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $systemIntegration->faq_image;
        }

        // Code for Banner Image
        if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $systemIntegration->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $systemIntegration->banner_image;
            }
    

            // dd($request->all());

        $systemIntegration->fill($request->all());
        $systemIntegration->system_integration_image = $imgName;
        $systemIntegration->faq_image = $faqimgName;
        $systemIntegration->banner_image = $bannerimgName;
        $systemIntegration->save();
        return redirect()->route('admin.system-integration.create')->with('success', 'Data updated Successfully !');
    }
}
