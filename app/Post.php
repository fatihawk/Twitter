<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use App\PostLikes;
use App\Comment;

class Post extends Model implements Searchable
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content','image','video'
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

    public function getSearchResult(): SearchResult
    {
        $url = route('home');

        return new SearchResult(
            $this,
            $this->content,
            $url
        );
    }


}
