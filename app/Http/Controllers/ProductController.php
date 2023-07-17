<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create_category(){
        $user = Auth::user();
        return view('pages.products.category.create',compact(['user']));
    }
}
