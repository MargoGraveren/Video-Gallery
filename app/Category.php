<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function videos(){
        return $this->belongsToMany('App\Video')->withTimestamps();
    }
}
