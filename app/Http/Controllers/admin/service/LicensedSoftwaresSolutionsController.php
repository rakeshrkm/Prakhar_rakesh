<?php

namespace App\Http\Controllers\admin\service;
use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\LicensedSoftwaresSolution;
use Illuminate\Http\Request;
use File;

class LicensedSoftwaresSolutionsController extends Controller
{
    public function create(Request $request){
        $licensedSoftwareSolution = LicensedSoftwaresSolution::orderBy('id', 'desc')->where('status',  ConstantHelper::ACTIVE)->first();
        return view('admin.services.licensed_softwares_solutions',compact('licensedSoftwareSolution'));
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
        'key_benefit_content_1_2' => 'required',
        'key_benefit_content_2_2' => 'required',
        'key_benefit_content_3_2' => 'required',
        'key_benefit_content_4_2' => 'required',
        'key_benefit_content_5_2' => 'required',


        
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
        'choose_us_content_1_2' => 'required',
        'choose_us_content_2_2' => 'required',
        'choose_us_content_3_2' => 'required',
        'choose_us_content_4_2' => 'required',
        'choose_us_content_5_2' => 'required',


        
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
    
    $licenseSoftware = $request->id ? LicensedSoftwaresSolution::find($request->id) : new LicensedSoftwaresSolution();
    if ($request->file('license_software_solution_image')) {
        // Code for it_hardware_ass_image
        $image_path = public_path("/uploads/services/" . $licenseSoftware->license_software_solution_image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
    
        $Image = $request->file('license_software_solution_image');
        $imgName = time() . "_" . $Image->getClientOriginalName();
        $destinationPath = public_path('/uploads/services/');
        $Image->move($destinationPath, $imgName);
        } else {
            $imgName = $licenseSoftware->license_software_solution_image;
        }
    
    // Code for FAQ image
        if ($request->file('license_software_solution_faq_image')) {
        $faq_image_path = public_path("/uploads/services/" . $licenseSoftware->license_software_solution_faq_image);
        if (File::exists($faq_image_path)) {
            File::delete($faq_image_path);
        }
    
        $faqImage = $request->file('license_software_solution_faq_image');
        $faqimgName = time() . "_" . $faqImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
        $faqDestinationPath = public_path('/uploads/services/');
        $faqImage->move($faqDestinationPath, $faqimgName); // Correct variable here
        } else {
            $faqimgName = $licenseSoftware->license_software_solution_faq_image;
        }


        // Code for Banner Images

        if ($request->file('banner_image')) {
            $banner_image_path = public_path("/uploads/banner/" . $licenseSoftware->banner_image);
            if (File::exists($banner_image_path)) {
                File::delete($banner_image_path);
            }
        
            $bannerImage = $request->file('banner_image');
            $bannerimgName = time() . "_" . $bannerImage->getClientOriginalName(); // Use getOriginalClientName for FAQ image
            $bannerDestinationPath = public_path('/uploads/banner/');
            $bannerImage->move($bannerDestinationPath, $bannerimgName); // Correct variable here
            } else {
                $bannerimgName = $licenseSoftware->banner_image;
            }
    
        $licenseSoftware->fill($request->all());
        $licenseSoftware->page_id = 3;
        $licenseSoftware->license_software_solution_image = $imgName;
        $licenseSoftware->license_software_solution_faq_image = $faqimgName;
        $licenseSoftware->banner_image = $bannerimgName;
        $licenseSoftware->save();
        return redirect()->route('admin.licensed-softwares-solutions.create')->with('success', 'Data updated Successfully !');
    }
}
