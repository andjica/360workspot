<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JobApplyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $job;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($job)
    {
        $this->job = $job;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        
        $emails = array(request()->emailto, "developersforanymarket@gmail.com");

        if(request()->pdffile == null)
        {
            return $this->from(request()->email)
            ->subject(request()->firstname.request()->lastname.' for '.request()->jobname)
            ->to($emails)
            ->view('emails.apply-jobemail')->with('job', $this->job);
        }
        else{
            return $this->from(request()->email)
            ->subject(request()->firstname.request()->lastname.' for '.request()->jobname)
            ->to($emails)
            ->view('emails.apply-jobemail')->with('job', $this->job)
            ->attach((request()->pdffile)->getRealPath(), array(
                'as' => request()->firstname.request()->lastname.'.'.(request()->pdffile)->getClientOriginalExtension(),
                'mime' => (request()->pdffile)->getMimeType()
            ));
        }
       

    }
}
