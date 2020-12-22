<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

	protected $fillable=['title','featured_image','category_id','content', 'slug', 'draft', 'user_id'];

	protected $dates = ['deleted_at'];

    

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
