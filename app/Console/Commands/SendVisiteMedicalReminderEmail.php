<?php

namespace App\Console\Commands;

use App\Mail\VisiteMedicalReminderEmail;
use App\Models\visitemedical;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendVisiteMedicalReminderEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:visitemedical-reminder-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a reminder email to marins whose visitemedical is about to expire.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $visiteMedicals = visitemedical::whereDate('date_fin','<', Carbon::now()->addMonths(3))->get();

        foreach($visiteMedicals as $visiteMedical){
            $marin = $visiteMedical->marin;
            $this->sendEmail($marin , $visiteMedical);
        }
    }


    private function sendEmail($marin, $visiteMedical)
    {
        Mail::to($marin->email)->send(new VisiteMedicalReminderEmail($visiteMedical));
    }
}
