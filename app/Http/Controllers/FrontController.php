<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Job;
use App\Salary;
use App\Blog;
use App\User;
use App\Post;
use App\Skill;
use App\Image;

class FrontController extends Controller
{

    private $data = [];
  


    public function __construct()
    {
        $this->data ['categories'] = Category::whereNull('sub_category_id')->get();
        $this->data ['cities'] =  City::all();
        $this->data['blogsfilter'] = Blog::limit(3)->inRandomOrder()->get();
        

        
        return $this->data;
    }
   
    public function index()
    {
          //one category
        $catweb = Category::where('id', 7)->with('jobs')->first();
        $cateducation =  Category::where('id', 2)->with('jobs')->first();
        $catgraphic =  Category::where('id', 3)->with('jobs')->first();
        $cataccount =  Category::where('id', 4)->with('jobs')->first();
        $catrestourant =  Category::where('id', 5)->with('jobs')->first();
        $catheatlt = Category::where('id', 6)->with('jobs')->first();

        $blogs = Blog::orderBy('created_at', 'DESC')->limit(4)->inRandomOrder()->get();

        $categoriesall = Category::where('sub_category_id',1)->paginate(16);
        $catcount = Category::where('sub_category_id', 1)->with('jobs')->count();
        
           



        $jobsr = Job::limit(7)->inRandomOrder()->get();

        if(request()->value)
        {
            $val = request()->value;
            $subcategories = Category::where('sub_category_id', $val)->get();
            return response()->json(['val' => $val, 'subcategories' => $subcategories ])->header("Access-Control-Allow-Origin",  "*");
        }

        return view('pages.index', compact( 'cities', 'catweb','cateducation','catgraphic',
        'cataccount', 'catrestourant', 'catheatlt', 'categoriesall', 'jobsr', 'blogs', 'catcount'), $this->data);
        
    }

   

    public function jobs()
    {


            request()->validate([
                'citysearch' => 'required',
                'categorysearch' => 'required',
                
               
            ],
            [
                'citysearch.required' => 'Please select city',
                'categorysearch.required' => 'Please select category',
                
            ]);
    
            $idcategory= request()->categorysearch;
            $idcity = request()->citysearch;
            $idsub = request()->selectsub;
          
            $jobs = Category::where('sub_category_id', $idcategory)
            ->whereHas('jobs', function ($query) {
                $query->where('city_id', request()->citysearch);})
                ->paginate(10);

            $categoryname = Category::where('id', $idcategory)->first();
            $subcats = Category::where('sub_category_id', '=', $idcategory)->get();
            $cityname = City::where('id', $idcity)->first();
            //for filtering
            
            $cities = City::all();
            $salaries = Salary::all();

            if(request()->value)
            {
            $val = request()->value;
            $subcategories = Category::where('sub_category_id', $val)->get();
            return response()->json(['val' => $val, 'subcategories' => $subcategories ])->header("Access-Control-Allow-Origin",  "*");
            }
            return view('pages.jobs', compact('jobs', 'cityname', 'categories', 'cities', 'categoryname', 'salaries', 'subcats','idcity', 'idcategory'), $this->data);
    
        
       
         
    }

    public function job($id)
    {
        $job = Job::find($id);

        $jobname = $job->title;
        $categoryJob = $job->category_id;
        $cityJob = $job->city_id;
        
        $jobsr = Job::where('category_id',$categoryJob)->where('city_id',$cityJob)
        ->limit(4)->inRandomOrder()->get();

        return view('pages.job', compact('job', 'jobname', 'jobsr'),$this->data);

        
    }


    public function jobcategory()
    {


        $category = request()->id;

        $jobs = Job::with('category')
                ->where('category_id', $category)
                ->orderBy('created_at', 'DESC')
                ->paginate(5);
    
        $categoryname = Category::where('id', $category)->first();

        //for filter
      
        $salaries = Salary::all();

        return view('pages.jobs-category', compact('jobs', 'categoryname', 'categories', 'cities', 'salaries'), $this->data);

          
    }

    public function jobsajax()
    {
        

        $jobs = Job::with('city')->with('category')->with('salary')->get();
        return response()->json(array('jobs'=> $jobs))->header("Access-Control-Allow-Origin",  "*");

    }

    public function search()
    {
       
        $idcategory = request()->categorysearch;
        $idcategorysub = request()->selectsub;
        $idcity = request()->citysearch;
        $idsalary = request()->salarysearch;

       
        $jobs = Job::where('category_id', $idcategorysub)
               
            ->where('city_id', request()->citysearch)
            ->where('salary_id', request()->salarysearch)
            ->where('fulltime', request()->full ? 1 : 0)
            ->where('partime', request()->part ? 1 : 0)
            ->where('intership', request()->inter ? 1 : 0)
            ->where('temporary', request()->temp ? 1 : 0)
            ->where('freelance', request()->free ? 1 : 0)
            ->where('fixed', request()->fx ? 1 : 0)
            ->orderBy('created_at', 'DESC')
           ->paginate(5);
       
     
        $subcats = Category::where('sub_category_id', '=', $idcategory)->get();

        $categoryname = Category::where('id', $idcategory)->first();
        $cityname = City::where('id', $idcity)->first();
        $salaries = Salary::all();
        
        if(request()->value)
        {
        $val = request()->value;
        $subcategories = Category::where('sub_category_id', $val)->get();
        return response()->json(['val' => $val, 'subcategories' => $subcategories ])->header("Access-Control-Allow-Origin",  "*");
        }
        return view('pages.search', compact('jobs', 'idcategory', 'cityname','idcity','cities', 'salaries','categoryname', 'subcats'), $this->data);

    }


    public function pricing()
    {
        return view('pages.pricing');
    }

    public function blogs()
    {
        $countblogs = Blog::count();
        $blogs = Blog::orderBy('created_at','DESC')->paginate(9);

        return view('pages.blogs-all', compact('countblogs', 'blogs'),$this->data);
    }


    public function jobsall()
    {
        $countjobs = Job::count();
        $jobs = Job::orderBy('created_at', 'DESC')->paginate(12);
        return view('pages.jsb-all', compact('countjobs', 'jobs'), $this->data);
    }

    public function contact()
    {
        
        return view('pages.contact');
    }
    

    public function searchuser()
    {
        $users = User::with('post')->with('skill')->where('name', 'LIKE', '%' . request()->name . '%')->get();
        
        return view('pages.users-searched', compact('users'), $this->data);
       
    }

    public function alluser()
    {
        
        $posts = Post::with('user')->paginate(10);
       
        return view('pages.users-all', compact('posts'), $this->data);
 
    }

    public function filteruser()
    {
        
        if(request()->all())
        {
            $cat = request()->categorysearch;
            $cit = request()->citysearch;


            $category =  Category::where('id', $cat)->first();
            $categoryname = $category->name;


            $city = City::where('id', $cit)->first();
            $cityname = $city->name;

            $subcats = Category::where('sub_category_id', '=', $cat)->get();


            $posts = Category::where('sub_category_id', $cat)
            ->whereHas('jobs', function ($query) {
                $query->where('city_id', request()->citysearch)
                ->orderBy('created_at', 'DESC');})
                ->paginate(10);
            
            
            $postcount = Category::with('post')->where('sub_category_id', $cat)->count();
            //$posts = Post::where('category_id', $cat)->where('city_id', $cit)->paginate(10);

            return view('pages.users-filter-response', compact('postcount', 'posts', 'subcats', 'categoryname', 'cityname', 'cat', 'cit'), $this->data);
            
        }
        return abort(404);
    }

    public function searcbythree()
    {
        if(request()->all())
        {
            $cat = request()->categoryId;
            $cit = request()->cityId;
            $sub = request()->subcatId;

            $category =  Category::where('id', $cat)->first();
            $categoryname = $category->name;

            $city = City::where('id', $cit)->first();
            $cityname = $city->name;

            $subn = Category::where('id', '=', $sub)->first();
            $subname = $subn->name;
            
            $subcats = Category::where('sub_category_id', '=', $cat)->whereNotIn('id', [$sub])->get();
        
            
            $posts = Post::where('category_id', $sub)
            ->where('city_id', $cit)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

            
            return view('pages.finduser', compact('categoryname', 'cityname', 'posts', 'subname', 'subcats', 'cat', 'cit'), $this->data);
          
        }
        return abort(404);
    }

    public function user($id)
    {
        $user = User::find($id) ?? abort(404);
        $userId = $user->id;

        $post = Post::where('user_id', $userId)->first();
        $agenumber =  \Carbon\Carbon::parse($post->age)->diff(\Carbon\Carbon::now())->format('%y years');
       
        $skillcount = Skill::where('user_id', $userId)->count();
        $skill = Skill::where('user_id', $userId)->get();

        $imagescount = Image::where('user_id', $userId)->count();
        $images = Image::Where('user_id', $userId)->get();
       
        return view('pages.user', compact('user', 'agenumber', 'post', 'skillcount', 'skill', 'imagescount', 'images'), $this->data);
    }

    public function searchbyall()
    {
        
        if(request()->all())
        {
            $idcity = request()->cityId;
            $idsub = request()->subcatId;
            $idcategory = request()->categoryId;
          

            $jobs = Job::where('city_id', $idcity)
                    ->where('category_id', $idsub)
                    ->orderBy('created_at', 'DESC')
                    ->paginate(7);
 
            $categoryname = Category::where('id', $idcategory)->first();
            $subcats = Category::where('sub_category_id', $idcategory)->get();
              
            
            //for filtering
            
            $cities = City::all();
            $salaries = Salary::all();
            $cityname = City::where('id', $idcity)->first();

            if(request()->value)
            {
                $val = request()->value;
                $subcategories = Category::where('sub_category_id', $val)->get();
                return response()->json(['val' => $val, 'subcategories' => $subcategories ]);
            }
           
            return view('pages.jobs-searchbyall', compact('jobs', 'cityname','idsub','idcategory', 'idcity','cities', 'salaries','categoryname', 'subcats'), $this->data);
        }
    }
}
