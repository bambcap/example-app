<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('mail:send-daily-tweet-count-mail')
            ->dailyAt('20:00');
        // $schedule->command('sample_command')->hourly();
        // $schedule->command('sample-command')->hourlyAt(8);
        // $schedule->command('sample-command')->daily();
        // $schedule->command('sample-command')->dailyAt('20:00');
        // $schedule->command('sample-command')->cron('15 20 * * *');
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
