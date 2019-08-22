<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Reply;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $guarded = [];
	public function getRouteKeyName() {
		return 'slug';
	}

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function replies() {
    	return $this->hasMany(Reply::class);
    }

    public function category() {
    	return $this->belongsTo(Category::class);
    }
}
