<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issu extends Model
{



     protected $fillable =[
      'name',
      'email',
      'phone',
      'msg',
      'building_number',
      'appartment_number',
      'user_id',




     ];
     public function user(){


        return $this->belongsTo(User::class);

     }
}
