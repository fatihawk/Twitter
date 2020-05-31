<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostLikes;
use App\Comment;

class Post extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content'
    ];
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function likes()
    {
        return $this->hasMany(PostLikes::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
