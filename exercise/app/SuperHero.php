<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperHero extends Model
{
    protected $table = 'superheros';

    //Superhero Facts

    protected $fillable = [
        'id',
        'name', 
        'fullName', 
        'strength',
        'speed', 
        'durability', 
        'power',
        'combat', 
        'race', 
        'height/0',
        'height/1',
        'weight/0', 
        'weight/1', 
        'eyeColor',
        'hairColor', 
        'publisher',
    ];

}
