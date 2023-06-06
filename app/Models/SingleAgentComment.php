<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleAgentComment extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    // public function getReply(){
    //     return $this->hasMany(SingleAgentCommentReply::class, 'comment_id', 'id');
    // }

    public function getAgentCommentUser(){

        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
