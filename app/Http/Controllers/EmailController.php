<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\JobApplyEmail;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function send(Request $request)
    {
            $job = array(
                'firstname' => $request->firstname,
                'jobname' => $request->jobname,
                'jobid' => $request->jobid,
                'lastname' => $request->lastname,
                'pdf' => $request->pdffile,
                'category' => $request->category,
                'city' => $request->city
            );

            $emailto = request()->emailto;
          
           Mail::cc($emailto, 'developersforanymarket@gmail.com')->send(new JobApplyEmail($job));
                
           return back()->with('success', 'Thank you for sending email to Us');

    }

    public function contact()
    {
         

        $data = ([
            'name' => request()->name,
            'email' => request()->email,
            'subject' => request()->subject,
            'message' => request()->message
        ]);

        $emailto = request()->email;

        try{
            Mail::cc($emailto, 'developersforanymarket@gmail.com')->send(new ContactEmail($data));
                
            return back()->with('success', 'Thank you for sending email to Us');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
       

        

    }
}
