<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $homeData = Home::all() ;
        return view('welcome', compact('homeData'));
    }
}
