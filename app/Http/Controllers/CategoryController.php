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

class CategoryController extends Controller
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
        $categories = Category::orderBy('name', 'ASC')->paginate(20);

        return view('pages.categories', compact('categories'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create-category', $this->data);
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
            'name.required' => 'Please enter a name of Category'
        ]);

        $category = new Category();
        $category->name = request()->name;

        try{
            $category->save();
            $categoryname = $category->name;

            return redirect('categories')->with('success', 'You made a new category '.$categoryname. ' success!');
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
        $category = Category::find($id) ?? abort(400);
        
        return view('pages.edit-category', compact('category'), $this->data);
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
        
        $category = Category::find($id) ?? abort(404);
        $categoryfirstname = $category->name;
        $categoryId = $category->id;

        request()->validate([
            'name' => 'required'
        ],
        [
            'name.required' => 'Please enter a name of Category'
        ]);

        $category->name = request()->name;

        try{
            $category->save();
            $categorysecondname = $category->name;
            return redirect('categories')->with('success', 'You edit a category with name '.$categoryfirstname.' to '.$categorysecondname.' with id: '.$categoryId);
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
        $category = Category::find($id) ?? abort(404);
        
        try{
            $category->delete();
            $categoryname = $category->name;
            $categoryId = $category->id;

            return redirect('categories')->with('success', 'You delete a category '.$categoryname.' with id '.$categoryId);
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
    }
}
