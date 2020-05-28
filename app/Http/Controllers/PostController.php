<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Category;
use App\Post;
use App\User;

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
        $this->data['categories'] = Category::all();

       
        return $this->data;
    }

    public function index()
    {
        $userId = auth()->user()->id;
        $post = Post::where('user_id', $userId)->first();
        $agenumber =  \Carbon\Carbon::parse($post->age)->diff(\Carbon\Carbon::now())->format('%y years');

        if($post)
        {
            return view('pages.user-panel', compact('post', 'agenumber'), $this->data);
        }
        return view('pages.user-panel', compact('post', 'agenumber'), $this->data);
    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
