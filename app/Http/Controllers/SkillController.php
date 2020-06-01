<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Post;
class SkillController extends Controller
{
    public function create()
    {
       
        $auth = auth()->user()->id;

        $postcount = Post::where('user_id', $auth)->count();
        $post = Post::where('user_id', $auth)->first();

        $skillcount = Skill::where('user_id', $auth)->count();
        $skill = Skill::where('user_id', $auth)->get();
        
        return view('pages.create-skill', compact('skillcount','skill', 'postcount', 'post'));
    }

    public function store()
    {
        $userId = auth()->user()->id;

        $skill = new Skill();

        
        $skill->skill_one = request()->sk1;
        $skill->percent_one = request()->pr1;

        $skill->skill_two = request()->sk2;
        $skill->percent_two = request()->pr2;

        $skill->skill_three = request()->sk3;
        $skill->percent_three = request()->pr3;

        $skill->skill_four = request()->sk4;
        $skill->percent_four = request()->pr4;

        $skill->skill_five = request()->sk5;
        $skill->percent_five = request()->pr5;

        $skill->skill_six = request()->sk6;
        $skill->percent_six = request()->pr6;

        $skill->skill_seven = request()->sk7;
        $skill->percent_seven = request()->pr7;

        $skill->skill_eight =  request()->sk8;
        $skill->percent_eight = request()->pr8;

        $skill->skill_nine = request()->sk9;
        $skill->percent_nine = request()->pr9;

        $skill->skill_ten = request()->sk10;
        $skill->percent_ten = request()->pr10;

        $skill->user_id = $userId;

        try{
            $skill->save();

            return redirect()->back()->with('success', 'You create skills successfully :)');
        }
        catch(\Throwable $e)
        {
            return redirect()->back()->with('error', 'Oops, something went wrong, try latter');
        }
        
    }

    public function update()
    {
        $userId = auth()->user()->id;

        $skill = Skill::where('user_id', $userId)->first();

        $skill->skill_one = request()->sk1;
        $skill->percent_one = request()->pr1;

        $skill->skill_two = request()->sk2;
        $skill->percent_two = request()->pr2;

        $skill->skill_three = request()->sk3;
        $skill->percent_three = request()->pr3;

        $skill->skill_four = request()->sk4;
        $skill->percent_four = request()->pr4;

        $skill->skill_five = request()->sk5;
        $skill->percent_five = request()->pr5;

        $skill->skill_six = request()->sk6;
        $skill->percent_six = request()->pr6;

        $skill->skill_seven = request()->sk7;
        $skill->percent_seven = request()->pr7;

        $skill->skill_eight =  request()->sk8;
        $skill->percent_eight = request()->pr8;

        $skill->skill_nine = request()->sk9;
        $skill->percent_nine = request()->pr9;

        $skill->skill_ten = request()->sk10;
        $skill->percent_ten = request()->pr10;

        $skill->user_id = $userId;

        try{
            $skill->save();

            return redirect()->back()->with('success', 'You make changes about your skills successfully :)');
        }
        catch(\Throwable $e)
        {
            return redirect()->back()->with('error', 'Oops, something went wrong, try latter');
        }
        
    
    }
}
