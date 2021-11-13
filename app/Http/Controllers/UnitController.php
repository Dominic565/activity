<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitController extends Controller
{
    public function index(){
        $units = Unit::orderByRaw('unit_type, description')->limit(50)->get();
        return view('unit.index',['unit'=>$units]);
       }
}
