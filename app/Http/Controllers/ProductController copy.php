<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;




class productController extends Controller

{
    public function product()
    {
        $products=product::all();
        return view('backend.pages.product',compact('products'));
    }
    public function createProduct()
    {
        $categories = Category::all();
        return view('backend.pages.productform',compact('categories'));
    }

    public function productstore(Request $request){
        // dd($request->all());
       Product::create([
        'name'=>$request->name,
        'category_id'=>$request->category,
        'quantity'=>$request->quantity,
        'price'=>$request->price,
        'brand'=>$request->brand
       ]);
       return redirect()->back();

    }

}
