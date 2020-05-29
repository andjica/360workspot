<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Image;
use App\Post;

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
        $auth = auth()->user()->id;
        $postcount = Post::where('user_id', $auth)->count();
        $post = Post::where('user_id', $auth)->first();
        $countimages = Image::where('user_id', $auth)->count();
        $images = Image::where('user_id', $auth)->get();

        return view('pages.create-image', compact('countimages', 'images', 'post','postcount'), $this->data);
    }

    public function store()
    {
        request()->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'imagedesc' => 'required'
        ],
        [
            'image.required' => 'You must choose image',
            'image.mimes' => 'Image must be in jpeg, jpg, png, gif or svg format',
            'imagedesc.required' => 'Image description is nessesery for uploading image'
        ]);

        $user = auth()->user()->id;
        $alt = request()->imagedesc;

        $countuser = Image::where('user_id', $user)->count();
       
        if($countuser >= 6)
        {
            return redirect()->back()->with('error', 'Sorry, you had already uploaded 6 image');
        }
        else{
            if(request()->image){

                $current = time();
                $image = request()->file('image');
                $name = $current.str_slug(request()->imagedesc).'.'.$image->getClientOriginalExtension();
            
                $destinationPath = public_path('/img-fromusers');

                $image->move($destinationPath, $name);
                
                $imagemodel = new Image();
                $imagemodel->url = $name;
                $imagemodel->alt = $alt;
                $imagemodel->user_id = $user;
    
                try{
                    $imagemodel->save();
                    return redirect()->back()->with('success', 'You made a new image successfully :)');
                }
                catch(\Throwable $e)
                {
                    return redirect()->back()->with('error', 'Error Message: There is a Problem Uploading Your Image, try latter');
                }
              
    
            }
        }
    }
}
