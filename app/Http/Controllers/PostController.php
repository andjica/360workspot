<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\City;
use App\Category;
use App\Post;
use App\User;
use App\Skill;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $data = [];

    public function __construct()
    {
        $this->data['cities'] = City::all();
        $this->data['categories'] = Category::whereNull('sub_category_id')->get();

       
        return $this->data;
    }

    public function index()
    {
        $auth = auth()->user()->id;

        $postcount = Post::where('user_id', $auth)->count();
        $post = Post::where('user_id', $auth)->first();
        
        $skillcount = Skill::where('user_id', $auth)->count();
        $skill = Skill::where('user_id', $auth)->get();

        if($postcount > 0)
        {    $agenumber =  \Carbon\Carbon::parse($post->age)->diff(\Carbon\Carbon::now())->format('%y years');
            return view('pages.user-panel', compact('post', 'agenumber', 'postcount', 'skillcount', 'skill'), $this->data);
        }
        return view('pages.user-panel', compact('post', 'agenumber', 'postcount', 'skillcount', 'skill'), $this->data);
    
        
    }

    public function video()
    {
        $auth = auth()->user()->id;

        $postcount = Post::where('user_id', $auth)->count();
        $post = Post::where('user_id', $auth)->first();
        
        $skillcount = Skill::where('user_id', $auth)->count();
        $skill = Skill::where('user_id', $auth)->get();

        if($postcount > 0)
        {    $agenumber =  \Carbon\Carbon::parse($post->age)->diff(\Carbon\Carbon::now())->format('%y years');
            return view('pages.user-video', compact('post', 'agenumber', 'postcount', 'skillcount', 'skill'), $this->data);
        }
        return view('pages.user-video', compact('post', 'agenumber', 'postcount', 'skillcount', 'skill'), $this->data);

    }

    public function updatevideo()
    {
        request()->validate([
            'video'  => 'required| mimes:mp4,mov,ogg | max:20000'
        ],
        [
            'video.required' => 'Video is required',
            'video.mimes' => 'Video must be in mp4,mov,ogg',
            'video.max' => 'Max video size is 2MB' 
        ]);
        $id = auth()->user()->id;

        if(request()->video)
        {
            $current = time();
            $video = request()->file('video');
            $name = $current.str_slug(request()->hiddenname).'.'.$video->getClientOriginalExtension();
        
            $destinationPath = public_path('/video-fromusers');

            $video->move($destinationPath, $name);

            $post = Post::where('user_id', $id)->first();
            $post->video = $name;

            try{
                $post->save();
                return redirect()->back()->with('success', 'You insert a new video successfully');
            }
            catch(\Throwable $e)
            {
                return abort(500);
            }
            

        }
    }
    public function social()
    {
        $auth = auth()->user()->id;

        $postcount = Post::where('user_id', $auth)->count();
        $post = Post::where('user_id', $auth)->first();
        
        $skillcount = Skill::where('user_id', $auth)->count();
        $skill = Skill::where('user_id', $auth)->get();

        if($postcount > 0)
        {    $agenumber =  \Carbon\Carbon::parse($post->age)->diff(\Carbon\Carbon::now())->format('%y years');
            return view('pages.user-social', compact('post', 'agenumber', 'postcount', 'skillcount', 'skill'), $this->data);
        }
        return view('pages.user-social', compact('post', 'agenumber', 'postcount', 'skillcount', 'skill'), $this->data);
     
    }

    public function updatesocial()
    {
        request()->validate([
            'youtube' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'instagram' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'website' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ],
        [
            'youtube.regex' => 'https://www.youtube.com/some-path',
            'instagram.regex' => 'https://www.instagram.com/some-path',
            'website.regex' => 'http://dfambusiness.com/some-path'
        ]);

        $id = auth()->user()->id;

        $post = Post::where('user_id', $id)->first();

        $post->youtube = request()->youtube;
        $post->instagram = request()->instagram;
        $post->website = request()->website;

        try{
            $post->save();
            return redirect()->back()->with('success', 'You update information about your social media successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'city' => 'required',
            'category' => 'required',
            'birthday' => 'required',
            'status' => 'required'
        ],
        [
            'city.required' => 'Please choose city',
            'category.required' => 'Please choose category',
            'birthday.required' => 'Enter your birthday',
            'status.required' => 'Please choose status'
        ]);

        $userId = auth()->user()->id;

        if(request()->image){

            $current = time();
            $image = request()->file('image');
            $name = $current.str_slug(request()->birthday).'.'.$image->getClientOriginalExtension();
        
            $destinationPath = public_path('/img-users');

            $image->move($destinationPath, $name);

            $post = new Post();
            $post->user_id = $userId;
            $post->category_id = request()->category;
            $post->city_id = request()->city;
            $post->age = request()->birthday;
            $post->short_biography = request()->about;
            $post->more_about = request()->moreabout;
            $post->status = request()->status;
            $post->image = $name;

            try{
                $post->save();
                return redirect()->back()->with('success', 'You set up information about yourself successfully');
            
            }
            catch(\Throwable $e)
            {
                return abort(500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit()
    {
        $userId = auth()->user()->id;
        $post = Post::where('user_id', $userId)->first() ?? abort(404);
       

        if(request()->value)
        {
            $val = request()->value;
            $subcategories = Category::where('sub_category_id', $val)->get();
            return response()->json(['val' => $val, 'subcategories' => $subcategories ]);
        }
        return view('pages.update-user-about', compact('post', 'val'), $this->data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        
        

        $userId = auth()->user()->id;

            $post = Post::where('user_id', $userId)->first() ?? abort(404);
            $post->user_id = $userId;
            
            $post->city_id = request()->cities;
            $post->age = request()->birthday;
            $post->short_biography = request()->short;
            $post->more_about = request()->more;
            $post->status = request()->status;


            if(request()->selectsub)
            {
                $post->category_id = request()->selectsub;
                if(request()->image){

                    $current = time();
                    $image = request()->file('image');
                    $name = $current.str_slug(request()->birthday).'.'.$image->getClientOriginalExtension();
                
                    $destinationPath = public_path('/img-users');
        
                    $image->move($destinationPath, $name);
        
                    try{
                        //delete current image
                        $image_path = public_path('img-users/'.$post->image);
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                        }
                        //save new one 
                        $post->image = $name;
                        $post->save();
                        return redirect()->back()->with('success', 'You update informations successfully');
                    }
                    catch(\Throwable $e)  
                    {
                        return abort(500);
                    }
                    
                       
                }
                else
                {
                    try{
                    $post->save();
                    return redirect()->back()->with('success', 'You update informations successfully');
                    }
                    catch(\Throwable $e)  
                    {
                        return abort(500);
                    }
                }
            }
            else
            {
                $post->category_id = request()->categories;

                if(request()->image){

                    $current = time();
                    $image = request()->file('image');
                    $name = $current.str_slug(request()->birthday).'.'.$image->getClientOriginalExtension();
                
                    $destinationPath = public_path('/img-users');
        
                    $image->move($destinationPath, $name);
        
                    try{
                        //delete current image
                        $image_path = public_path('img-users/'.$post->image);
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                        }
                        //save new one 
                        $post->image = $name;
                        $post->save();
                        return redirect()->back()->with('success', 'You update informations successfully');
                    }
                    catch(\Throwable $e)  
                    {
                        return abort(500);
                    }
                    
                       
                }
                else
                {
                    try{
                    $post->save();
                    return redirect()->back()->with('success', 'You update informations successfully');
                    }
                    catch(\Throwable $e)  
                    {
                        return abort(500);
                    }
                }
            }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
