<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Job;
use App\Salary;
use App\Blog;

class FrontController extends Controller
{

    private $data = [];
  


    public function __construct()
    {
        $this->data ['categories'] = Category::all();
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

        $categoriesall = Category::with('jobs')->paginate(16);

        $jobsr = Job::limit(7)->inRandomOrder()->get();

       

        return view('pages.index', compact( 'cities', 'catweb','cateducation','catgraphic',
        'cataccount', 'catrestourant', 'catheatlt', 'categoriesall', 'jobsr', 'blogs'), $this->data);
        
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
    
            $getCategoryId = request()->categorysearch;
            $getCityId = request()->citysearch;
            
            //if parametes come through get - url
            $jobs = Job::where('category_id', $getCategoryId)
                        ->where('city_id', $getCityId)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(7);
    
            //else
           

            $categoryname = Category::where('id', $getCategoryId)->first();


            //for filtering
            $categories = Category::all();
            $cities = City::all();
            $salaries = Salary::all();

            return view('pages.jobs', compact('jobs', 'categories', 'cities', 'categoryname', 'salaries'), $this->data);
    
        
       
         
    }

    public function job($id)
    {
        $job = Job::find($id);

        $jobname = $job->title;
        $categoryJob = $job->category_id;
        $cityJob = $job->city_id;
        
        $jobsr = Job::where('category_id',$categoryJob)->where('city_id',$cityJob)
        ->limit(4)->inRandomOrder()->get();

        return view('pages.job', compact('job', 'jobname', 'jobsr'));

        
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
       
    
        $parttime = request()->part ? 1 : 0;
        $fulltime = request()->full ? 1 : 0;
        $intertime = request()->inter ? 1 : 0;
        $temptime = request()->temp ? 1 : 0;
        $freetime = request()->free ? 1 : 0;
        $fiixedtime = request()->fx ? 1 : 0;

        $idcategory = request()->categorysearch;
        $idcity = request()->citysearch;
        $idsalary = request()->salarysearch;

        
        $jobs = Job::with('category')->with('city')
                    ->where('category_id', $idcategory)
                    ->where('city_id', $idcity)
                    ->where('salary_id', $idsalary)
                    ->where('fulltime', $fulltime)
                    ->where('partime', $parttime)
                    ->where('intership', $intertime)
                    ->where('temporary', $temptime)
                    ->where('freelance', $freetime)
                    ->where('fixed', $fiixedtime)
                    ->orderBy('created_at', 'DESC')
                    ->paginate(5);

        //for filter
     
        $categoryname = Category::where('id', $idcategory)->first();
      
        $salaries = Salary::all();

        return view('pages.search', compact('jobs','categories', 'cities', 'salaries','categoryname'), $this->data);

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
    

}