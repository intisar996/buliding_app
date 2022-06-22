<?php

namespace App\Mail;
use App\Issu;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class isuuesrequestsubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $issu ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Issu $issu)
    {
        //

       $this->Issu = $issu;



    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        $data['name'] =$this->Issu->name;


       

        return $this->view('emails.isuues_request_submitted',$data);
    }
}



