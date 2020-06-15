<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Not extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'not','ad'
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
