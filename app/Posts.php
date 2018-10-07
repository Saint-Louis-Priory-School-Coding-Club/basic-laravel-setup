<?php

namespace App;

class Posts extends Model
{
    public function user() {
      return $this->belongsTo(User::class);
    }
    
    public function comments() {
      return $this->hasMany(Comments::class);
    }
}
