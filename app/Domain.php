<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = ["domain"];

    public function presenters(){
        return $this->belongsToMany('App\Presenter');
    }
}
