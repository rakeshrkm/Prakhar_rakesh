<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutSection;
use App\Models\HomeFirstSection;
use App\Models\HomeServiceSection;
use App\Models\HomeProfessionalSkillSection;
use App\Models\HomeSectionFive;
use Illuminate\Http\Request;
use File;

class HomeController extends Controller
{
    public function index(){
        $data = HomeFirstSection::where('page_id',1)->first();

     //   print_r($data);die;
        return view('front.index', compact('data'));
    }

    public function edit(){
       
        $data = HomeFirstSection::where('page_id',1)->first();

        return view('admin.home.edit-section1', compact('data'));
    }

    public function update(Request $req){
        // $section  = HomeFirstSection::where('page_id',1);

        // $section->fill($req->all())->save();
        // HomeFirstSection::where('page_id',1)->updtae($req->all());
        $imageName = time().'.'.$req->image->extension();  
        //  dd($req);

        $req->image->move(public_path('images'), $imageName);

        $req->image = $imageName;


      //  dd($req->all());

        // HomeFirstSection::updateOrCreate(
        //     ['page_id' => 1],
        //     $req->all()
        //  );
        return redirect()->back()->with('success', 'Successfully Updated!');
    }
    public function editAbout(){
       
        $data = HomeAboutSection::where('page_id',1)->first();

        return view('admin.home.edit-section2', compact('data'));
    }

    public function updateAbout(Request $req){
            $section  = HomeAboutSection::where('page_id',1)->first();
            if ($req->about_image){
            $image_path = public_path("/uploads/about/".$section->about_image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $aboutImage = $req->file('about_image');
            $imgName = $aboutImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/about/');
            $aboutImage->move($destinationPath, $imgName);
          } else {
            $imgName = $aboutImage->about_image;
          }
          $section->fill($req->all());
          $section->about_image = $imgName;
          $section->save();
                return redirect()->back()->with('success', 'Successfully Updated!');
    }
    
     public function editService(){
        $data = HomeServiceSection::where('page_id',1)->first();
        // dd($data);
        return view('admin.home.edit-section3', compact('data'));
    }
    
     public function updateService(Request $req){
         
        $validatedData = $req->validate([
            'first_heading' => 'required',
            'second_heading' => 'required',
            'content_second_heading' => 'required',
            'drone_tect_heading' => 'required',
            'drone_tech_content' => 'required',
            'manpower_support_heading' => 'required',
            'manpower_content' => 'required',
            'web_app_heading' => 'required',
            'web_app_content' => 'required',
            'gis_based_service_head' => 'required',
            'gis_based_service_content' => 'required',
            'system_integration_head' => 'required',
             'system_integration_content' => 'required',
            'hr_outsourcing_head' => 'required',
            'hr_outsourcing_content' => 'required'
        ]);
        $data = HomeServiceSection::where('page_id',1)->first();
        $data->fill($req->all());
        $data->save();
         return redirect()->back()->with('success', 'Successfully Updated!');
     }
     
     
     public function editProfessional(){
        $data = HomeProfessionalSkillSection::where('page_id',1)->first();
        return view('admin.home.edit-section4', compact('data'));
    }
    
     public function updateProfessional(Request $request){
          $validatedData = $request->validate([
            'title' => 'required|max:255',
            'heading' => 'required|max:255',
            'web_development' => 'required|max:255',
            'web_development_count' => 'required|numeric',
            'drone_technology' => 'required|max:255',
            'drone_technology_count' => 'required|numeric',
            'manpower_support' => 'required|max:255',
            'manpower_support_count' => 'required|numeric',
            'system_integration' => 'required|max:255',
            'system_integration_count' => 'required|numeric'
        ]);
         
       $dataProfesssionSkill = HomeProfessionalSkillSection::where('page_id', 1)->first();

// Update data fields
        $dataProfesssionSkill->update([
            'title' => $request->title,
            'heading' => $request->heading,
            'web_development' => $request->web_development,
            'web_development_count' => $request->web_development_count,
            'drone_technology' => $request->drone_technology,
            'drone_technology_count' => $request->drone_technology_count,
            'manpower_support' => $request->manpower_support,
            'manpower_support_count' => $request->manpower_support_count,
            'system_integration' => $request->system_integration,
            'system_integration_count' => $request->system_integration_count,
        ]);
        
        // Image upload and update logic
        foreach ([$request->skill_first_image, $request->skill_second_image, $request->skill_third_image] as $imageField) {
            if ($request->hasFile($imageField)) {
                // Delete existing image
                $imagePath = public_path("/uploads/professional/" . $dataProfesssionSkill->$imageField);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
        
                // Upload new image
                $professionalImage = $request->file($imageField);
                $imgName = $professionalImage->getClientOriginalName();
                $destinationPath = public_path('uploads/professional/');
                $professionalImage->move($destinationPath, $imgName);
        
                // Update the corresponding field in the database
                $dataProfesssionSkill->$imageField = $imgName;
            }
        }
        
        // Save the updated record
        $dataProfesssionSkill->save();
          return redirect()->back()->with('success', 'Successfully Updated!');
    }
    
    public function sectionFive(){
        $data = HomeSectionFive::where('page_id',1)->first();
         return view('admin.home.edit-section5', compact('data'));
    }
      public function updateSectionFive (Request $request){
         $validatedData = $request->validate([
            'experiences_heading' => 'required|max:255',
            'experiences_value' =>  'required|numeric',
            'happy_client_heading' => 'required|max:255',
            'happy_client_value' => 'required|numeric',
            'project_done_heading' => 'required|max:255',
            'project_done_value' => 'required|numeric',
            'our_service_area' => 'required|max:255',
            'our_service_value' => 'required|numeric'
        ]);
        
        $data = HomeSectionFive::updateOrInsert(
            ['id' => $request->id],
            [
            'experiences_heading' => $request->experiences_heading,
            'experiences_value' => $request->experiences_value,
            'happy_client_heading' => $request->happy_client_heading,
            'happy_client_value' => $request->happy_client_value,
            'project_done_heading' => $request->project_done_heading,
            'project_done_value' => $request->project_done_value,
            'our_service_area' => $request->our_service_area,
            'our_service_value' => $request->our_service_value,
             'page_id' => 1
        ]);
        return redirect()->back()->with('success', 'Successfully Updated!');
    }
}
