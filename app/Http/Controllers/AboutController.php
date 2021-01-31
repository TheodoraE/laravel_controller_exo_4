<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $abou=[
            (object)['titre1'=>"Strong Coffee, Strong Roots", 'titre2'=>"About Our Cafe", 'para1'=> "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.", 'para2'=> "We guarantee that you will fall in lust with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        ];
        return view('pages/about', compact('abou'));
    }
}
