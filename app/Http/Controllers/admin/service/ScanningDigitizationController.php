<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\ScanningDigitization;
use Illuminate\Http\Request;
use File;

class ScanningDigitizationController extends Controller
{
    public function create(Request $request){
        $scanningDigitization = ScanningDigitization::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.scanning_digitization',compact('scanningDigitization'));
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
        'choose_us_content' =>  'required',
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
        'faq_heading_6' => 'required',
        'faq_content_6' => 'required',
        'status' => 'required'
    ]);
    
    $scanningDigitization = $request->id ? ScanningDigitization::find($request->id) : new ScanningDigitization();
    if ($request->hasFile('scanning_digitization_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $scanningDigitization->scanning_digitization_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('scanning_digitization_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $scanningDigitization->scanning_digitization_image;
        }
    
    // Code for FAQ image
        if ($request->hasFile('scanning_digitization_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $scanningDigitization->scanning_digitization_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('scanning_digitization_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $scanningDigitization->scanning_digitization_faq_image;
        }

         // Code for banner images image

         if ($request->hasFile('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $scanningDigitization->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $scanningDigitization->banner_image;
            }
    
        $scanningDigitization->fill($request->all());
        $scanningDigitization->page_id = 3;
        $scanningDigitization->scanning_digitization_image = $imgName;
        $scanningDigitization->scanning_digitization_faq_image = $faqimgName;
        $scanningDigitization->banner_image = $bannerimgName;
        $scanningDigitization->save();
        return redirect()->route('admin.scanning-digitization.create')->with('success', 'Data updated Successfully !');
    }
}
