<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Reply;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user() {
    	$this->belongsTo(User::class);
    }

    public function replies() {
    	$this->hasMany(Reply::class);
    }

    public function category() {
    	$this->belongsTo(Category::class);
    }
}