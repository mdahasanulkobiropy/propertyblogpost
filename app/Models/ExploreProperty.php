<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExploreProperty extends Model
{
    use HasFactory;

    public function getExploreName(){

        return $this->belongsTo(Explore::class, 'explore_id', 'id');
    }
}
