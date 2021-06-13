<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Activity::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
