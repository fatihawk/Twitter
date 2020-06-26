<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrunGrup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
     ];
     
     public function markas()
     {
         return $this->hasMany(Marka::class);
     }
     public function uruns()
     {
         return $this->hasOne(Urun::class);
     }
}
