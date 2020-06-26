<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Ad', 'Adres'
     ];
     public function users()
     {
         return $this->hasOne(User::class);
     }
     public function siparis()
     {
         return $this->hasMany(Siparis::class);
     }
}
