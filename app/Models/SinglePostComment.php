<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinglePostComment extends Model
{

    use HasFactory;

    public function getCommentUser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
