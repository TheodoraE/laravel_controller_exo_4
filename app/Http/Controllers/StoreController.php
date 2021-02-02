<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $storeData= Store::all();
        $aboutData = About::all();
        return view('pages/store', compact('storeData','aboutData'));
    }
}
