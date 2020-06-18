<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Done extends Model
{
    protected $fillable = [
        'text','done_id'
    ];

    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'done_id');
    }
}
