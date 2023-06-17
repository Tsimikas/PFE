<?php

namespace App\Console\Commands;

use App\Mail\FasiculeReminderEmail;
use App\Models\fasicule;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendFasiculeReminderEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:fasicule-reminder-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a reminder email to marins whose fasicule is about to expire.';

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
       $fasicules = fasicule::whereDate('date_expriration','<', Carbon::now()->addMonths(3))->get();

       foreach( $fasicules as $fasicule){
        $marin = $fasicule->marin;
        $this->sendEmail($marin, $fasicule);
       }
    }

    private function sendEmail($marin, $fasicule)
    {
        Mail::to($marin->email)->send(new FasiculeReminderEmail($fasicule));
    }
} 
