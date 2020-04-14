<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\City;
use App\Salary;
use App\User;
use App\Account;
use App\AccountType;
use App\Purchase;
use App\Blog;
use Carbon\Carbon;


class BlogController extends Controller
{
    protected $data = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       

        $this->data['countjobs'] = Job::count();
        $this->data['countusers'] = User::count();
        $this->data['countpurcahes'] = Purchase::count();
        $this->data['countcities'] = City::count();
        $this->data['countaccounttypes'] = AccountType::count();
        $this->data['countblogs'] = Blog::count();
       
        return $this->data;
    }

    public function index()
    {
        $blogs = Blog::paginate(6);
        return view('pages.blogs',compact('blogs'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('pages.create-blog',$this->data);
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
            'title' => 'required',
            'desc' => 'required',
            'desc2' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|'
            
        
        ],
        [
            'title.required' => 'Title name for this job is required',
            'desc.required' => 'Description short one is required field',
            'desc2.required' => 'Description is required field',
            'image.required' => 'Image is required',
            'image.image' => 'U moet alleen een afbeelding selecteren',
            'image.mimes' => 'Afbeelding moet de indeling jpeg, png, jpg, gif, svg hebben'
    
        ]);

        if(request()->image)
        {
            $image = request()->file('image');
            $name = $image->getClientOriginalName();
        
            $destinationPath = public_path('/img-blogs');
            $image->move($destinationPath, $name);

            $blog = new Blog();
            $blog->title = request()->title;
            $blog->description = request()->desc;
            $blog->description_two = request()->desc2;
            $blog->user_id = 1;
            $blog->url = $name;

            try{
                $blog->save();

                return redirect()->back()->with('success', 'You made a blog successfully :)');
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
        $blog = Blog::find($id);
        $blogs = Blog::all();
        $categories = Category::all();
        $blogsfilter = Blog::limit(3)->inRandomOrder()->get();
        return view('pages.blog', compact('blog', 'blogs', 'categories', 'blogsfilter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('pages.edit-blog', compact('blog'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate([
            'title' => 'required',
            'desc' => 'required',
            'desc2' => 'required',
           
            
        
        ],
        [
            'title.required' => 'Title name for this job is required',
            'desc.required' => 'Description short one is required field',
            'desc2.required' => 'Description is required field',
           
    
        ]);

        $blog = Blog::find($id) ?? abort(400);

        if(request()->image)
        {
            $image = request()->file('image');
            $name = $image->getClientOriginalName();
        
            $destinationPath = public_path('/img-blogs');
            $image->move($destinationPath, $name);

            $blog->title = request()->title;
            $blog->description = request()->desc;
            $blog->description_two = request()->desc2;
            $blog->user_id = 1;
            $blog->url = $name;

            try{
                $blog->save();

                return redirect('blogs')->with('success', 'You edit a successfully a blog with id: '.$blog->id);
            }
            catch(Exception $e)
            {
                return abort(500);
            }
        }
        else
        {
            $blog->title = request()->title;
            $blog->description = request()->desc;
            $blog->description_two = request()->desc2;
            $blog->user_id = 1;

            try{
                $blog->save();

                return redirect('blogs')->with('success', 'You edit a successfully a blog with id: '.$blog->id);
            }
            catch(Exception $e)
            {
                return abort(500);
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
        $blog = Blog::find($id) ?? abort(400);

        try{
            $blog->delete();
            return redirect('blogs')->with('success','You delete successfully blog with id: '.$blog->id);
        }
        catch(Exception $e)
        {
            return abort(500);
        }
    }
}
