<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class Crud extends Controller
{
    public function add(Request $request)
    {
         $a= new Title;
        $a->title=$request->title;
        $a->save();
      echo "insert success";
        
      
    }
}
