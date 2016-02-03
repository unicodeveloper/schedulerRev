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
        $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
        $information = 'Inspire Prosper to continue gingering';

        //shell_exec('mkdir prosper');

        Mail::raw('Do it again ooo', function ($message) {
            $message->from('prosper.otemuyiwa@andela.com', 'Scheduling Laravel');

            $message->to('prosperotemuyiwa@gmail.com');
        });
    }
}
