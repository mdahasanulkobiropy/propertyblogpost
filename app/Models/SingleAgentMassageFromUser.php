<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleAgentMassageFromUser extends Model
{
    use HasFactory;

    public function getMassageUser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function getMassageAgent(){
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }
    public function getMassageStatus(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
