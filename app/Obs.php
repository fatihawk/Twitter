<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ad','ders', 'vize','final','not','durum'
     ];
     public function ogrencilers()
     {
         return $this->hasMany(Ogrenciler::class);
     }
     public function derslers()
     {
         return $this->hasMany(Dersler::class);
     }
     public function nots()
     {
         return $this->hasMany(Dersler::class);
     }
}
