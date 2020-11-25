<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public function Units()
   {
     return $this->belongsToMany('App\Unit');
   } 
}
