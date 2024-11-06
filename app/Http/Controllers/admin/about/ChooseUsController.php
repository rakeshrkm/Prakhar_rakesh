<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\ChooseUs;
use Illuminate\Http\Request;
use File;

class ChooseUsController extends Controller
{
    public function index(){
        $chooseUs = ChooseUs::orderBy('id',  'desc')->where('status',  ConstantHelper::ACTIVE)->get();
        return view('admin.about.choose-us.index',compact('chooseUs'));
    }
    
     public function create(){
        return view('admin.about.choose-us.create');
    }
    
    public function store(Request $request){
     $validated = $request->validate([
        'title' => 'required|max:255',
        'heading' => 'required|max:255',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',
        'heading_3' => 'required|max:255',
        'content_3' => 'required',
        'heading_4' => 'required|max:255',
        'content_4' => 'required',
        'status' => 'required'
    ]);
        
        $AboutUs = new ChooseUs();
         if ($request->about_image_sec2_1){
            $AboutUsImage = $request->file('about_image_sec2_1');
            $imgName = $AboutUsImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/about/');
            $AboutUsImage->move($destinationPath, $imgName);
          }

            // image  2
            
        if ($request->about_image_sec2_2){
            $AboutUsImage2 = $request->file('about_image_sec2_2');
            $imgName2 = $AboutUsImage2->getClientOriginalName();
            $destinationPath2 = public_path('/uploads/about/');
            $AboutUsImage2->move($destinationPath2, $imgName2);
          }

          
          $AboutUs->fill($request->all());
          $AboutUs->about_image_sec2_1 = $imgName;
          $AboutUs->about_image_sec2_2 = $imgName2;
          $AboutUs->save();  
          
          return redirect()->route('admin.chooseus.index')->with('success', 'Choose Us data Successfully created!');
    }
    
    public function edit($id){
        $chooseUs = ChooseUs::find($id);
        return view('admin.about.choose-us.edit', ['chooseUs' => $chooseUs]);
    }
    
     public function Update(Request $request, $id){
     $validated = $request->validate([
        'title' => 'required|max:255',
        'heading' => 'required|max:255',
        'content_1' => 'required',
        'heading_2' => 'required|max:255',
        'content_2' => 'required',
        'heading_3' => 'required|max:255',
        'content_3' => 'required',
        'heading_4' => 'required|max:255',
        'content_4' => 'required',
        'status' => 'required'
    ]);
        $chooseUs = ChooseUs::find($id);
       
        if ($request->hasFile('about_image_sec2_1')){
            $image_path = public_path("/uploads/about/".$chooseUs->about_image_sec2_1);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            
            $chooseUsImage = $request->file('about_image_sec2_1');
            $imgName = $chooseUsImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/about/');
            $chooseUsImage->move($destinationPath, $imgName);
          } else {
            $imgName = $chooseUs->about_image_sec2_1;
          }
          
        //   image 2
          if ($request->hasFile('about_image_sec2_2')){
            $image_path2 = public_path("/uploads/about/".$chooseUs->about_image_sec2_2);
            if (File::exists($image_path2)) {
                File::delete($image_path2);
            }
            
            $chooseUsImage2 = $request->file('about_image_sec2_2');
            $imgName2 = $chooseUsImage2->getClientOriginalName();
            $destinationPath2 = public_path('/uploads/about/');
            $chooseUsImage2->move($destinationPath2, $imgName2);
          } else {
            $imgName2 = $chooseUs->about_image_sec2_2;
          }
          
          $chooseUs->fill($request->all());
          $chooseUs->about_image_sec2_1 = $imgName;
          $chooseUs->about_image_sec2_2  = $imgName2;
          $chooseUs->save(); 
          
          return redirect()->route('admin.chooseus.index')->with('success', 'Choose Us data updated Successfully!');
    }
}
