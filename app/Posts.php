<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
	use SoftDeletes;

	protected $fillable = ['title', 'category_id', 'content', 'thumbnail', 'slug', 'users_id'];

    public function category(){
    	return $this->belongsTo('App\Categories');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tags');
    }

    public function users(){
    	return $this->belongsTo('App\User');
    }
}
