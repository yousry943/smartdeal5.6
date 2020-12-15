<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Mail\Mailable;
// use Mail;
 use Helper;


class sendmailjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $emaildata;

    public function __construct($data)
    {
        $this->emaildata = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
   

        Helper::sendmail($this->emaildata);

    }
}
