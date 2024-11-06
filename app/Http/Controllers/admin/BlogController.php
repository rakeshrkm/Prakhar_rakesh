<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\Blog;
use Illuminate\Http\Request;
use File;

class BlogController extends Controller
{
    public function index(){
        
        $blogs = Blog::orderBy('id',  'desc')->where('status',  ConstantHelper::ACTIVE)->get();
        
        return view('admin.blogs.index', [
            'blogs' =>  $blogs
            ]);
    }
    
     public function create(){
        
        return view('admin.blogs.create');
    }
    
    public function store(Request $request){
     $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'date' => 'required',
        'status' => 'required'
    ]);
        
        $blog = new Blog();
        $blog->fill($request->all());
         if ($request->image){
            $blogImage = $request->file('image');
            $imgName = $blogImage->getClientOriginalName();
            $destinationPath = public_path('/uploads/blogs/');
            $blogImage->move($destinationPath, $imgName);
          }
          
          $blog->fill($request->all());
          $blog->image = $imgName;
          $blog->created_by = 'Admin';
          $blog->save();  
          
          return redirect()->route('admin.blogs.index')->with('success', 'Blog Successfully created!');
    }
    
     public function Update(Request $request, $id){
     $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'date' => 'required',
        'status' => 'required'
    ]);
        $blog = Blog::find($id);
        
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
        $blog = Blog::find($id);
        return view('admin.blogs.edit', ['blog' => $blog]);
    }

    
}
