<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\City;
use App\Salary;

class Job extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
}
