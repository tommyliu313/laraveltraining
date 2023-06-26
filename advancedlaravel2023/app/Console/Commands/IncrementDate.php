<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IncrementDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:increment-date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increment all the scheduled classes date.';

    /**
     * Execute the console command.
     */
    /*public function handle()
    {
        $scheduledClasses = ScheduledClasses::all();
        $scheduledClasses->each(function($class){
            $class->date_time = $class->date_time->addDays(1);
            $class->save();
        })
    };*/
}
