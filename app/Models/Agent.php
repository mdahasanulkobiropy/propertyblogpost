<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function getUserAgent(){
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }



    public function getComment(){
        return $this->hasMany(SingleAgentComment::class, 'agent_id', 'agent_id');
    }
}
