<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $guarded = ['id'];

    use HasFactory;


    public function getBlogCategory(){
        
        return $this->hasOne(BlogCategory::class, 'id', 'blogcategory_id');
    }

    public function getTag(){
        return $this->hasOne(BlogTag::class, 'id', 'blogtag_id');
    }
    public function getBlogImage(){
        return $this->hasMany(BlogPostImage::class, 'blogpost_id', 'id');
    }

    public function getBlogComment(){
        return $this->hasMany(SinglePostComment::class, 'blogpost_id', 'id');
    }
}
