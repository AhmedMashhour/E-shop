<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Product;
class Eshop extends Controller
{
   public  function index()
   {
       $departments=Department::all();
       $new_products=Product::orderBy('id','desc')->get();

      return view('style.home',['departments'=>$departments,
          'new_products'=>$new_products]);
   }
}
