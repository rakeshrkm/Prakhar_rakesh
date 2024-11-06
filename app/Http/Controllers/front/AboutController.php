<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\AboutFaq;
use Illuminate\Http\Request;
use File;

class AboutController extends Controller
{
    public function index(){
        
        $aboutUs = AboutFaq::orderBy('id',  'desc')->where('status',  ConstantHelper::ACTIVE)->get();
        
        return view('admin.about.aboutus.index',compact('aboutUs'));
    }
    
     public function create(){
        
        return view('admin.about.aboutus.create');
    }
    
    public function store(Request $request){
     $validated = $request->validate([
        'title' => 'required|max:255',
        'heading' => 'required|max:255',
        'content' => 'required',
        'status' => 'required'
    ]);
        
        $AboutUs = new AboutUs();
         if ($request->about_image_1){
            $AboutUsImage = $request->file('about_image_1');
            $imgName = $AboutUsImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/about/');
            $AboutUsImage->move($destinationPath, $imgName);
          }
          
          $AboutUs->fill($request->all());
          $AboutUs->about_image_1 = $imgName;
          $AboutUs->save();  
          
          return redirect()->route('admin.aboutus.index')->with('success', 'About Us Successfully created!');
    }
    
    public function edit($id){
        $aboutUs = AboutUs::find($id);
        return view('admin.about.aboutus.edit', ['aboutUs' => $aboutUs]);
    }
    
     public function Update(Request $request, $id){
     $validated = $request->validate([
        'title' => 'required|max:255',
        'heading' => 'required|max:255',
        'content' => 'required',
        'status' => 'required'
    ]);
        $aboutUs = AboutUs::find($id);
       
        if ($request->hasFile('about_image_1')){
            $image_path = public_path("/uploads/about/".$aboutUs->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            
            $aboutUsImage = $request->file('about_image_1');
            $imgName = $aboutUsImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/about/');
            $aboutUsImage->move($destinationPath, $imgName);
          } else {
            $imgName = $aboutUs->about_image_1;
          }
          $aboutUs->fill($request->all());
          $aboutUs->about_image_1 = $imgName;
          $aboutUs->save(); 
          
          return redirect()->route('admin.aboutus.index')->with('success', 'About Us data updated Successfully!');
    }
}
