<?php

namespace App\Mail;
use App\Issue;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IssueRequsetSubmited extends Mailable
{
    use Queueable, SerializesModels;
public $issue;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Issue $issue)
    {
        //
        $this->issue=$issue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {//$data['email']='ali@gmail.com';
        $data['name']=$this->issue->name;
        return $this->view('emails.issue-requset-submited',$data);
    }
}
