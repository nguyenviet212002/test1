<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class Congratulation extends Controller
{
    //
    public function addWish(Request $request){

        
      $data =  $request -> all();
    
     Data::create($data);

        return view('happybirtday.index');
    }
    public function listWish(){
        $data = Data::all();
        return view("happybirtday.index",compact('data'));
    }
}
