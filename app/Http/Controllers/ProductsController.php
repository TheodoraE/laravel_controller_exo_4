<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $produ=[
            (object)['titre1'=>"Blended to Perfection", 'titre2'=>"Coffees &amp; Teas", 'para'=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more."],
            (object)['titre1'=>"Delicious Treats, Good Eats", 'titre2'=>"Bakery &amp; Kitchen", 'para'=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods."],
            (object)['titre1'=>"From Around the World", 'titre2'=>"Bulk Speciality Blends", 'para'=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."]
        ];
        return view('pages/products', compact('produ'));
    }
}
