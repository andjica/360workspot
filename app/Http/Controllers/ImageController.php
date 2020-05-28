<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Image;

class ImageController extends Controller
{
    private $data = [];

    public function __construct()
    {
        $this->data['cities'] = City::all();
        $this->data['categories'] = Category::all();

       
        return $this->data;
    }

    public function create()
    {
        return view('pages.create-image', $this->data);
    }
}
