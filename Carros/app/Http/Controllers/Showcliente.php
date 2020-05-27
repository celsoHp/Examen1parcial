<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos; 

class Showcliente extends Controller
// {
    
    //
    //public function get_modelos($id){
      //  $cliente = modelos::all()->toArray();
       // dd($cliente);
        
   // }

// } 

{
    
    //
    public function get_modelos($id){
        $cliente = modelos::all();
        //dd($modelos);
       return view('pages.homes', ['modelos' => $cliente]);
    }

} 