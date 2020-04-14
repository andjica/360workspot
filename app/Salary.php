<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Salary extends Model
{
    protected $guarded = [];

    public function jobs()
    {
        $this->hasMany(Job::class, 'salary_id');
    }
}
