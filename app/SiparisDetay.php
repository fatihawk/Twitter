<?php

namespace App;
use App\User;
use App\Urun;
use App\Siparis;

use Illuminate\Database\Eloquent\Model;

class SiparisDetay extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'miktar','urun_id','fiyat'
    ];
    public function users()
     {
         return $this->hasMany(User::class);
     }
     public function uruns()
     {
         return $this->hasOne(Urun::class);
     }
     public function siparis()
     {
         return $this->hasOne(Siparis::class);
     }
}
