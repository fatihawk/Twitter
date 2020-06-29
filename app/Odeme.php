<?php

namespace App;
use App\Siparis;

use Illuminate\Database\Eloquent\Model;

class Odeme extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tutar'
    ];
    public function siparis()
    {
        return $this->hasOne(Siparis::class);
    }
}
