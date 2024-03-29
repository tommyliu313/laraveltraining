<?php

namespace App\Listeners;

use App\Events\ClassCanceled;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyClassCanceled
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ClassCanceled $event): void
    {
        $members = $event->scheduledClass->members();
        $members->each(function($user){
            Mail::to($user)->send(new ClassCanceledMail);
        })

    }
}
