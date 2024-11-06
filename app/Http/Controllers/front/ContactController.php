<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Helpers\ConstantHelper;
use App\Models\Contact;
use Illuminate\Http\Request;
use File;

class ContactController extends Controller
{
    
    public function store(Request $request){
     
     $validated = $request->validate([
        'title' => 'required|max:255',
        'heading' => 'required|max:255',
        'content' => 'required',
        'status' => 'required'
    ]);
        
        $contact = new Contact();
        $contact->fill($request->all());
        $AboutUs->save();  
        return redirect()->route('admin.aboutus.index')->with('success', 'About Us Successfully created!');
    }
}
