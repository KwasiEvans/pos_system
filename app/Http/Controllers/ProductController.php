<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create_category(){
        $user = Auth::user();
        return view('pages.products.category.create',compact(['user']));
    }

    public function store_cat(Request $request)
    {
       try{
        $cat = new CategoryModel();
        $cat->category_name = $request->category_name;
        $cat->category_code = $request->category_code;
        $cat->category_desc = $request->category_desc;
        if ($request->hasFile('category_img')) {
            $uploadFile = $request->file('category_img'); // Use file() instead of first()
            if ($uploadFile) {
                $path = $uploadFile->store('categories', 'public');
                $cat->category_img = $path;
            }
        }
       
       $cat->save();

        return redirect()->back()->with('success','Category is created successfully');
       }catch(\Exception $e){
         return back()->with('error',$e->getMessage());
       }
    }
    
}
