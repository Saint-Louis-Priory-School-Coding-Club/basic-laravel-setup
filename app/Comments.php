<?php

namespace App;

class Comments extends Model
{
    public function user() {
      return $this->belongsTo(User::class);
    }
    
    public function post() {
      return $this->belongsTo(Posts::class);
    }
}
