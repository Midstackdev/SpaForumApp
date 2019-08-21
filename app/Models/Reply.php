<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Question;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question() {
    	$this->belongsTo(Question::class);
    }

    public function user() {
    	$this->belongsTo(User::class);
    }

    public function like() {
    	$this->hasManyLikes(Like::class);
    }
}
