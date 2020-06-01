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
use Carbon\Carbon;

class JobController extends Controller
{

    protected $data = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');

        $this->data['countjobs'] = Job::count();
        $this->data['countusers'] = User::count();
        $this->data['countpurcahes'] = Purchase::count();
        $this->data['countcities'] = City::count();
        $this->data['countaccounttypes'] = AccountType::count();
       
        return $this->data;
    }

    public function index()
    {
        $jobs = Job::paginate(10);

        return view('pages.jobs-admin', compact('jobs'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         request()->validate([
                'title' => 'required',
                'company' => 'required',
                'city' => 'required',
                'category' => 'required',
                'salary' => 'required',
                'desc' => 'required',
                'desc2' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|'
                
            
            ],
            [
                'title.required' => 'Title name for this job is required',
                'city.required' => 'City is required',
                'company.required' => 'Company is required',
                'category.required' => 'Category is required',
                'salary.required' => 'City is required',
                'desc.required' => 'Description is required field',
                'desc2.required' => 'Description two is required field',
                'image.required' => 'Image is required',
                'image.image' => 'This must be image',
                'image.mimes' => 'Image must be in jpeg, png, jpg, gif, svg format'
        
            ]);
        
        if (request()->image) {

            $image = request()->file('image');
            $name = $image->getClientOriginalName();
        
            $destinationPath = public_path('/img-jobs');
            $image->move($destinationPath, $name);
          

            $userId = auth()->user()->id;
            $job = new Job();

            $job->title = request()->title;
            $job->description = request()->desc;
            $job->description_two = request()->desc2;
            $job->user_id = $userId ;
            $job->city_id = request()->city;
            $job->category_id = request()->category;
            $job->salary_id = request()->salary;
            $job->title_two = request()->title2;
            $job->title_three = request()->title3;
            $job->company_name = request()->company;
            $job->phone = request()->contact;
            $job->fulltime = request()->fulltime  ? true : false;
            $job->partime = request()->parttime  ? true : false;
            $job->intership = request()->intreship  ? true : false;
            $job->freelance = request()->freelance  ? true : false;
            $job->temporary = request()->temporary  ? true : false;
            $job->fixed = request()->fixed  ? true : false;
            $job->url = $name;

            if(auth()->user()->account->account_type_id == 1)
            {
                $job->expires = Carbon::now()->addMonths(1);
            }
            elseif(auth()->user()->account->account_type_id == 2)
            {
                $job->expires = Carbon::now()->addMonths(3);
            }
            elseif(auth()->user()->account->account_type_id == 3)
            {
                $job->expires = Carbon::now()->addMonths(6);
            }
            elseif(auth()->user()->account->account_type_id == 4)
            {
                $job->expires = Carbon::now()->addMonths(12);
            }

       
                $job->save();
                return redirect()->back()->with('success', 'You made successfully job');
         
       
            

        }
           
        
        




        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
        $idJob =  request()->id;
        $idUser = auth()->user()->id;

        $job = Job::find($idJob);
        $userjid = $job->user_id;
        
        if($userjid != $idUser)
        {
            return abort(404);
        }

       
        $categories = Category::all();
        $cities = City::all();
        $salaries = Salary::all();

        return view('pages.edit-job', compact('categories', 'cities', 'salaries', 'job'));
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
            'company' => 'required',
            'city' => 'required',
            'category' => 'required',
            'salary' => 'required',
            'desc' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|'
            
        
        ],
        [
            'title.required' => 'Title name for this job is required',
            'city.required' => 'City is required',
            'company.required' => 'Company is required',
            'category.required' => 'Category is required',
            'salary.required' => 'City is required',
            'desc.required' => 'Description is required field',
            'image.image' => 'U moet alleen een afbeelding selecteren',
            'image.mimes' => 'Afbeelding moet de indeling jpeg, png, jpg, gif, svg hebben'
    
        ]);
        
        $id = request()->id;
        $job = Job::find($id) ?? abort(404);
        $userId = auth()->user()->id;

        
            $job->title = request()->title;
            $job->description = request()->desc;
            $job->description_two = request()->desc2;
            $job->user_id = $userId ;
            $job->city_id = request()->city;
            $job->category_id = request()->category;
            $job->salary_id = request()->salary;
            $job->title_two = request()->title2;
            $job->title_three = request()->title3;
            $job->company_name = request()->company;
            $job->phone = request()->contact;
            $job->fulltime = request()->fulltime  ? true : false;
            $job->partime = request()->partime  ? true : false;
            $job->intership = request()->intership  ? true : false;
            $job->freelance = request()->freelance  ? true : false;
            $job->temporary = request()->temporary  ? true : false;
            $job->fixed = request()->fixed  ? true : false;
            $job->updated_at = Carbon::now();

            if(request()->image == null)
            {
                try{
                    $job->save();
                    return redirect()->back()->with('success','You update your job successfully');
                }
                catch(Exception $e)
                {
                    return abort(500);
                }
            }
            else{
                $image = request()->file('image');
                $name = $image->getClientOriginalName();
        
                $destinationPath = public_path('/img-jobs');
                $image->move($destinationPath, $name);
                $job->url = $name;

                try{
                    $job->save();
                    return redirect()->back()->with('success','You update your job successfully');
                }
                catch(\Throwable $e)
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
        //
    }
}
