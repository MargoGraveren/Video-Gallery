<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable=[
        'title',
        'url',
        'description'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function categories(){
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function getCategoryListAtribute(){
        return $this->categories()->pluck('id')->toArray();
    }
}
