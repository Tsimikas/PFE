<?php

namespace App\Mail;

use App\Models\visitemedical;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VisiteMedicalReminderEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $visiteMedical;
    protected $marin;

    public function __construct(visitemedical $visiteMedical)
    {
        $this->visiteMedical = $visiteMedical;
        $this->marin = $visiteMedical->marin;
    }

    public function build()
    {
        return $this->subject('Your visitemedical is about to expire')
            ->markdown('visitemedical-reminder')
            ->with([
                'marin' => $this->marin,
                'visiteMedical' => $this->visiteMedical,
            ]);
    }
}
