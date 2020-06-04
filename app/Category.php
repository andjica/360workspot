<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Job;
use App\Post;

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

    public function posta()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->hasOne(Category::class, 'sub_category_id');
    }
}
