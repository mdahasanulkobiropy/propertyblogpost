<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MassageFromUserToAdmin extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getMassageTopic(){
        return $this->hasOne(MassageTopicForUser::class, 'id', 'topic_id');
    }
}
