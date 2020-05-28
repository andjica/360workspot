<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Job;
use App\Post;

class City extends Model
{
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'city_id');
    }

    public function post()
    {
        return $this->hasMany(Job::class, 'category_id');
    }
}
