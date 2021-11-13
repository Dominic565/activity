<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
   public function index(){
    $categories = Category::orderByRaw('category, description')->limit(50)->get();
    return view('category.index',['category'=>$categories]);
   }
}
