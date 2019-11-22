<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $fillable = ['title', 'category_id', 'content', 'thumbnail', 'slug'];

    public function category(){
    	return $this->belongsTo('App\Categories');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tags');
    }
}
