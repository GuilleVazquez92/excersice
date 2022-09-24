<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\SuperHero;

class SuperHerosController extends Controller
{
    
    public function show()
    {
        $superHeros     =  SuperHero::all();
        return response($superHeros);
    }

}