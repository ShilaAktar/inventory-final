<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function createCategory()
    {
        $categories=Category::all();
        return view('backend.pages.Category.list',compact('categories'));
    }
    public function categoryForm()
    {
        return view('backend.pages.Category.category');
    }

    public function categoryPost(Request $request){
        // dd($request->all());
       Category::create([
        'name'=>$request->category_Name,
        'details'=>$request->Details,
       ]);
       return redirect()->back();
    }
}
