<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandise;

class MerchandiseController extends Controller
{
    public function index(){
        $merchandise = Merchandise::orderByRaw('product_name, brand_name, retail_price, wholesale_price, wholesale_qty, qty_stock')->limit(50)->get();
        return view('merchandise.index',['merchandise'=>$merchandise]);
       }
}
