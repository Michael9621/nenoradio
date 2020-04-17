<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable=["name","bio","promo_link","featured_image","domain"];

    public function presenters(){
        return $this->belongsToMany('App\Presenter');
    }
}
