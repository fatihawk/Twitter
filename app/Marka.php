<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
     ];
     public function uruns()
     {
         return $this->hasMany(Urun::class);
     }
     public function urun_grups()
     {
         return $this->hasOne(UrunGrup::class);
     }
}
