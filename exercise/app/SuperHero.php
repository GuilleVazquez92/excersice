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

      public function scopeId($query, $id)
    {   
        if (!empty($id) ) {
            return $query->where('id', '=', $id);
        }
        
    }

    public function scopeName($query, $name)
    {   
        if (!empty($name) ) {
            return $query->where('name', 'like', '%'.$name.'%');
        }
        
    }

    public function scopeFullName($query, $fullName)
    {   
        if (!empty($fullName) ) {
            return $query->where('fullName', 'like', '%'.$fullName.'%');
        }
        
    }

     public function scopeStrength($query, $strength)
    {
        if (!empty($strength) ) {
            return $query->where('strength', '=', $strength);
        }
    }

      public function scopeSpeed($query, $speed)
    {
        if (!empty($speed) ) {
            return $query->where('speed', '=', $speed);
        }
    }

      public function scopeDurability($query, $durability)
    {
        if (!empty($durability) ) {
            return $query->where('durability', '=', $durability);
        }
    }

      public function scopePower($query, $power)
    {
        if (!empty($power) ) {
            return $query->where('power', '=', $power);
        }
    }

      public function scopeCombat($query, $combat)
    {
        if (!empty($combat) ) {
            return $query->where('combat', '=', $combat);
        }
    }


    public function scopeRace($query, $race)
    {   
        if (!empty($race) ) {
            return $query->where('race', 'like', '%'.$race.'%');
        }
        
    }

      public function scopeHeight_1($query, $height_1)
    {   

        if (!empty($height_1) ) {
            $height_1= $height_1." cm";
            return $query->where('height/1', '=', $height_1);
            }
        elseif($height_1 !=null){
            return $query->where('height/1', '=', '0 cm');
            }
    }  

      public function scopeWeight_1($query, $weight_1)
    {   

        if (!empty($weight_1) ) {
            $weight_1= $weight_1." kg";
            return $query->where('weight/1', '=', $weight_1);
            }
        elseif($weight_1 !=null){
            return $query->where('weight/1', '=', '0 kg');
            }
    } 

     public function scopeEyeColor($query, $eyeColor)
    {   
        if (!empty($eyeColor) ) {
            return $query->where('eyeColor', 'like', '%'.$eyeColor.'%');
        }
        
    }

     public function scopeHairColor($query, $hairColor)
    {   
        if (!empty($hairColor) ) {
            return $query->where('hairColor', 'like', '%'.$hairColor.'%');
        }
        
    }

     public function scopePublisher($query, $publisher)
    {   
        if (!empty($publisher) ) {
            return $query->where('publisher', 'like', '%'.$publisher.'%');
        }
        
    }

     public function scopeOrder($query, $order)
    {   
        if (!empty($order) ) {
            return $query->orderBy($order, 'ASC');
        }
        
    }

}
