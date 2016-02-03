<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        // // Use a closure
        // $schedule->call(function () {
        //     DB::table('recent_users')->delete();
        // })->daily();


        // // Issue a command to the Operating System
        // $schedule->exec('mkdir prosper')->daily();

        // // Chaining execution like so
        // $schedule->call(function () {
        //     Mail::raw("I am sending the email right now", function($message) {
        //         $message->from('temitope@gmail.com', 'Laravel Scheduling');
        //         $message->to('prosperotemuyiwa@gamil.com');
        //     });
        // })->weekly()->mondays()->at('13:00');
    }
}
