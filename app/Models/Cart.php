<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Cart extends Model
{
    use HasFactory;
    //protected $primaryKey = "id"; 

    public function getFood(){
        return $this->hasMany('App\Models\Food','id','foodId'); 
    }
    
}
