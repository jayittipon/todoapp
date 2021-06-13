<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function activities(){
        return $this->hasMany(Activity::class);
      }
}
