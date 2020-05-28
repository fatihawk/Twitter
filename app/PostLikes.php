<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PostLikes extends Model
{
    protected $fillable = [
        'user_id','post_id'
    ];
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
