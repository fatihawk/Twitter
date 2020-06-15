<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ogrenciler extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'ad','e-mail','tc_no','sinif'
    ];
}
