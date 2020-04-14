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

class CityController extends Controller
{
    
    private $data = [];
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
        $cities = City::orderBy('created_at', 'DESC')->paginate(10);

        return view('pages.cities', compact('cities'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create-city', $this->data);
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
            'name' => 'required'
        ],
        [
            'name.required' => 'Please enter a name of city'
        ]);

        $city = new City();
        $city->name = request()->name;

        try{
            $city->save();
            $cityname = $city->name;
            return redirect('cities')->with('success', 'You create a '.$cityname.' city successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
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
        $city = City::find($id) ?? abort(404);

        return view('pages.edit-city', compact('city'),$this->data);
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
            'name' => 'required'
        ],
        [
            'name.required' => 'Please enter a name of city'
        ]);

        
        $city = City::find($id) ?? abort(404);
        $cityfirst = $city->name;
        $city->name = request()->name;
        $cityId = $city->id;
        try{
            $city->save();

            $citysecond =  $city->name;
            return redirect('cities')->with('success', 'You edit a '.$cityfirst.' to '.$citysecond.' with id: '.$cityId.' successfully!');
        }
        catch(\Throwable $e)
        {
            return abort(500);
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
        $city = City::find($id) ?? abort(400);
       
        $cityId = $city->id;
        $cityname = $city->name;

        try{
            $city->delete();
            return redirect('cities')->with('success', 'You delete a '.$cityname.' with id '.$cityId);
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
        
    }
}
