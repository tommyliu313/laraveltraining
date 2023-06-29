<?php

namespace App\Http\Controllers;

use App\Events\ClassCanceled;
use App\Models\ClassType;
use Illuminate\Http\Request;

class ScheduledClassController extends Controller
{

    public function index(){
        
    }
    public function create(){
        $classTypes = ClassType::all();
        return view('instructor.schedule');
    }
    public function destroy(ScheduledClass $schedule){
        if(auth()->user()->cannot('delete', $schedule)){
            abort(403);
        }

        ClassCanceled::dispatch($schedule);
    }
}
