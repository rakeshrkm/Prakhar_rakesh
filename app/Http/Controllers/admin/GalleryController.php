<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\Gallery;
use Illuminate\Http\Request;
use File;

class GalleryController extends Controller
{
    public function index(){
        
        $galleries = Gallery::orderBy('id',  'desc')->where('status',  ConstantHelper::ACTIVE)->paginate(10);
        
        return view('admin.gallery.index', [
            'galleries' =>  $galleries
            ]);
    }
    
     public function create(){
        
        return view('admin.gallery.create');
    }
    
    public function store(Request $request){
     $validated = $request->validate([
        'category' => 'required|max:255',
        'status' => 'required'
    ]);
        $blog =  new Gallery();
         if ($request->image){
            $blogImage = $request->file('image');
            $imgName = time()."-".$blogImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/gallery/');
            $blogImage->move($destinationPath, $imgName);
          }
          $blog->category = $request->category;
          $blog->status = $request->status;
          $blog->images = $imgName;
          $blog->save();  
          return redirect()->route('admin.gallery.index')->with('success', 'Gallert Successfully created!');
    }
    
     public function Update(Request $request, $id){
     $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'date' => 'required',
        'status' => 'required'
    ]);
        $blog = Gallery::find($id);
        
        if ($request->hasFile('image')){
            $image_path = public_path("/uploads/blogs/".$blog->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $blogImage = $request->file('image');
            $imgName = $blogImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/blogs/');
            $blogImage->move($destinationPath, $imgName);
          } else {
            $imgName = $blog->image;
          }
          $blog->fill($request->all());
          $blog->image = $imgName;
          $blog->save(); 
          
          return redirect()->route('admin.blogs.index')->with('success', 'Blog updated Successfully!');
    }
    
    public function edit($id){
        $blog = Gallery::find($id);
        return view('admin.blogs.edit', ['blog' => $blog]);
    }

    
}
