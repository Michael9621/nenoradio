<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presenter extends Model
{
    protected $fillable = ["name", "featured_image", "bio"];
    public function shows(){
        return $this->belongsToMany('App\Show');
    }

    public function domains(){
        return $this->belongsToMany('App\Domain');
    }
}
