<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Post;
use App\PostLikes;
use App\Comment;
use App\MyImages;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'duplicate','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $appends = [
        'prefix',
    ];

    /**
     * @param role role slug 
     */
    public function hasRole($roles)
    {
        $userRoles = $this->roles->pluck('slug');
        if(is_string($roles)){
            return $userRoles->contains($roles);
        }
        foreach($roles as $role){
            if($userRoles->contains($role)){
                return true;
            }
        }
        return false;
    }

    public static function ofRole($roles)
    {
        if(is_string($roles)){
            $roles = [$roles];
        }
        return User::whereHas('roles', function ($query) use($roles) {
            $query->whereIn('slug', $roles);
        });
    }

    public function getPrefixAttribute()
    {
        return $this->roles->first()->slug;
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
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
