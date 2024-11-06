<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\AboutFaq;
use Illuminate\Http\Request;
use File;

class FaqController extends Controller
{
    public function index(){
        
        $aboutFaqs = AboutFaq::where('status',  ConstantHelper::ACTIVE)->get();
        
        return view('admin.about.faq.index',compact('aboutFaqs'));
    }
    
     public function create(){
        
        return view('admin.about.faq.create');
    }
    
    public function store(Request $request){
     $validated = $request->validate([
        'heading' => 'required|max:255',
        'content' => 'required',
        'status' => 'required'
    ]);
        
        $aboutFaq = new AboutFaq();
        $aboutFaq->fill($request->all());
        $aboutFaq->page_id = 2;
        $aboutFaq->save();  
          
          return redirect()->route('admin.about-faqs.index')->with('success', 'Faq Successfully created!');
    }
    
    public function edit($id){
        $aboutFaq = AboutFaq::find($id);
        return view('admin.about.faq.edit', ['aboutFaq' => $aboutFaq]);
    }
    
     public function Update(Request $request, $id){
        $validated = $request->validate([
        'heading' => 'required|max:255',
        'content' => 'required',
        'status' => 'required'
        ]);
        
        $aboutFaq = AboutFaq::find($id);
        $aboutFaq->fill($request->all());
        $aboutFaq->save(); 
          
        return redirect()->route('admin.about-faqs.index')->with('success', 'Faq data updated Successfully!');
    }
}
