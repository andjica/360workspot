<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Salary;
use App\Account;
use App\Job;
use App\AccountType;
use App\User;
use App\Role;
use App\Purchase;
use Carbon\Carbon;


class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $data = [];

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

    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $categories = Category::all();
        $cities = City::all();
        $salaries = Salary::all();

        $userId = auth()->user()->id;
        
        $jobs = Job::where('user_id', $userId)->get();
        $usercount = $jobs->count();
        //forsidebar random 3 jobs
        $jobsrandom = Job::where('user_id', $userId)->limit(2)->inRandomOrder()->get();
        
       

        $accid = auth()->user()->account->account_type_id;

        $user = User::with('account')->where('id', $userId)->first();

        //finding account type from user
        $acctype = Account::with('accounttype')->where('user_id', $userId)->first();
        
        $lastjob =  Job::where('user_id', $userId)->get()->last();

       
        //find role
        if($user->role_id == 2)
        {
            try{
                return view('home', compact('categories', 'cities', 'salaries', 'usercount', 'lastjob', 'acctype', 'jobs', 'user', 'jobsrandom'));
            }
            catch(Exception $e)
            {
                return abort(500);
            }
           
        }
        elseif($user->role_id == 3)
        {
            return redirect('/user-panel');
        }
        else
        {
            $jobs = Job::limit(5)->get();
            $accountsusers = Account::orderBy('user_id', 'DESC')->paginate(7);

            $acctype = $user->account->account_type_id;

            $type = AccountType::find($acctype);
            
            
            $accountypes = AccountType::all();
         
            
            
            //refreshing database, account type is updateting to 1 after expires

            try{
                Account::where('valid_until' ,'<' , Carbon::now())->update(['account_type_id' => 1]);
                return view('home-admin', compact('jobs', 'accountsusers', 'type','accountypes'), $this->data);
            }
            catch(Exception $e)
            {
                return abort(500);
            }
           
        }
        
        
        
    }

    public function tables()
    {
        //for sidebar
        $userId = auth()->user()->id;
        $accid = auth()->user()->account->account_type_id;
        $user = User::with('account')->where('id', $userId)->first();
        $acctype = AccountType::find($accid);
        
        
        $jobs = Job::where('user_id', $userId)->orderBy('created_at', 'DESC')->paginate(1);

        $countjobs = $jobs->count();

        
        
        return view('pages.tables', compact('user', 'acctype', 'jobs', 'countjobs'));
    }


    public function users()
    {
        

        $accounts = Account::orderBy('user_id', 'DESC')->paginate(10);
        return view('pages.users', compact('accounts'));
    }

    public function userbought($id)
    {
        $user = User::find($id);
        $userId = $user->id;

        $countJob = Job::where('user_id', $userId)->get();

        $countjobs = $countJob->count();
        

        $purchases = Purchase::with('accounttype')->with('user')->where('user_id', $userId)->get();
        $countpurcase = $purchases->count();
        
        $sum = Purchase::where('user_id', $userId)->sum('price');
        

        return view('pages.user-bought', compact('countpurcase','purchases', 'countjobs', 'user', 'sum'));

    }

    public function usercontact()
    {
        $username = auth()->user()->name;
        $useremail = auth()->user()->email;
       
        return view('pages.contact-user', compact('username', 'useremail'));
    }

    
}
