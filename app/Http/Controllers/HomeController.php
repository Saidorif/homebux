<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
      return response()->json(['success' => 'About us']);
    }
}
