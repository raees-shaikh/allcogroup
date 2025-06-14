<?php

namespace App\Mail;

use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
        //dd($data);
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->data->email)
            ->subject('Careers From')
            ->attach($this->data->resume, [
                'as' => 'Resume-' . now()->format('dmy-his') . '.pdf',
                'mime' => 'application/pdf',
            ])->markdown('mail.career-mail')->with([
                'data' => $this->data,
            ]);
    }
}
