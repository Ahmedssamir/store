<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ccontroller extends Controller
{
   public function sigh(){
       return view('auth.register');
   }
}
