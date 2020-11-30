<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Products;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    public function index()
    {


    }

     public function save(Request $request)
    
    {
        if (Input::file('image')) {
            $dp=public_path('images');
            $filename=uniqid().'.jpg';
            $img=Input::file('image')->move($dp,$filename);
        }
    
    	 Products::create([
        	'name'=>$request->input('name'),
        	'product_id'=>$request->input('product_id'),
        	'specifications'=>$request->input('specifications'),
        	'price'=>$request->input('price'),
        	'description'=>$request->input('description'),
            'image'=>$filename
        ]);
        return view("layouts.app");
    }

}
