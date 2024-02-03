<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function Productshow(){
        return view('Product.products');
    }
    public function Productsend(Request $request){
       /*
        $request->validate([
            'Product_name' => 'required',
            'Product_image' => 'required',
            'Product_desc' => 'required',
        ]); */
       // dd('i love');
        if ($request->hasFile('Product_image')) {
            $ProductName = time().'.'.$request->Product_image->getClientOriginalExtension();
            $request->Product_image->move(public_path('Product'), $ProductName);
        }
  

        DB::table('products')->insert([
            'Product_name' => $request->Product_name,
            'Product_image' => $ProductName,
            'Product_desc' => $request->Product_desc,
            
        ]);
        return back();

    }
}
