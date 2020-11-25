<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
   public function students()
   {
     return $this->belongsToMany('App\Student');
   }

   public function lecturers()
   {
     return $this->belongsToMany('App\Lecturer');
   }  
}
