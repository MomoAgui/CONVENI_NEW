<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Image as ImageModel;

class ImageController extends Controller
{
    public function addImage(Request $request)
    {
      
       $file_name = $request->file('image');
       $request->file('image')->storege('public/' .$file_name);
       
       $image=new Image();
       $image->name=$file_name;
       $image->path='storage/' .$file_name;
       $image->save();
        
        return view('add_image',['image'=>$Image]);
    }
    
}