<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleLanguageChange extends Controller
{
    public function index (Request $request){
       
        if($request->lang){
            
            session()->put("applocale",$request->lang);
            
            app()->setlocale(session()->get("applocale"));           
   
        }
        
    }
}
