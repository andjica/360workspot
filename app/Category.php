<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Job;

class Category extends Model
{
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'category_id');
    }

    public function post()
    {
        return $this->hasMany(Job::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->hasOne(Category::class, 'sub_category_id');
    }
}
