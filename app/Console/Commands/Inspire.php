<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Mail;

class Inspire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $information = 'Inspire Heroku to continue sending more emails';

         Mail::raw($information, function($message) {
                $message->from('temitope@gmail.com', 'Scheduling Tasks on Heroku');
                $message->to('prosperotemuyiwa@gamil.com');
        });
    }
}
