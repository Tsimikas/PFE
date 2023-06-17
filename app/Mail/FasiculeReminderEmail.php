<?php

namespace App\Mail;

use App\Models\fasicule;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FasiculeReminderEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $fasicule; 
    protected $marin;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(fasicule $fasicule)
    {
        $this->fasicule = $fasicule;
        $this->marin = $fasicule->marin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Fasicule is about to expire')
            ->markdown('fasicule-reminder')
            ->with([
                'marin' => $this->marin,
                'fasicule' => $this->fasicule,
            ]);
    }
}
