<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public Function articles(){
    	return $this->hasMany('App\Article');
  
    }
}
