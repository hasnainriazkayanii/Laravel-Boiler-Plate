<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailTemplate;

class DynamicEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $template_name='';

    /**
     * Create a new message instance.
     *
     * @return void
     */
public function __construct($data,$template_name='')
    {
        $this->data = $data;
        $this->template_name=$template_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $details=EmailTemplate::where('name', $this->template_name)->first();
        return $this->from(setting('company_email'), setting('company_name'))
            ->subject($details->subject)
            ->view('emails.dynamic')
            ->with([
                'content'=>$details->parse($this->data),
                'subject'=>$details->subject,
        ]);
    }
}
