<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devam extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ogr_id', 'ders_id','devamsizlik'
     ];
     public function ogrencilers()
     {
         return $this->hasMany(Ogrenciler::class);
     }
     public function derslers()
     {
         return $this->hasMany(Dersler::class);
     }
}
