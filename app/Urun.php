<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','marka_id','group_id','fiyat','stok'
     ];
     
     public function markas()
     {
         return $this->hasOne(Marka::class);
     }
     public function uruns()
     {
         return $this->hasOne(UrunGrup::class);
     }
}
