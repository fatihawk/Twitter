<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Tarih', 'Fatura_adres'
     ];
     public function users()
     {
         return $this->hasMany(User::class);
     }
     public function adres()
     {
         return $this->hasMany(Adres::class);
     }
     public function odemes()
     {
         return $this->hasOne(Odeme::class);
     }
     public function siparis_detay()
     {
         return $this->hasOne(SiparisDetay::class);
     }
}