<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function MainPage(){
    	$products=Products::get();
    	return view('main.index',["products"=>$products]);
    }
}
