<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps=false; //kur i fshijme timestamps duhet me shtu kto qe mos me na qit error.


    public Function articles(){
    	return $this->hasMany('App\Article');
  
   
}

}
