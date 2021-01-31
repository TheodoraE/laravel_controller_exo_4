<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $horaire=[
            (object)['jour'=>"Sunday", 'heure'=>"Closed"],
            (object)['jour'=>"Monday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Tueday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Wednesday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Thurdsday", 'heure'=>"7:00 AM to 8:00 PM"],
            (object)['jour'=>"Friday", 'heure'=>"9:00 AM to 5:00 PM"],
            (object)['jour'=>"Saturday", 'heure'=>"Closed"]
        ];
        $store2=[
            (object)['titre1'=>"Strong Coffee, Strong Roots", 'titre2'=>"About Our Cafe", 'para1'=>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.", 'para2'=>"We guarantee that you will fall in
            lust
            with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        ];
        return view('pages/store', compact('horaire','store2'));
    }
}
