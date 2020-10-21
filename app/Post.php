<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
      'user_id',
      'title',
      'slug',
      'body',
      'updated_at'
    ];


public function user(){
  return $this->belongTo('App/User');
}

}
