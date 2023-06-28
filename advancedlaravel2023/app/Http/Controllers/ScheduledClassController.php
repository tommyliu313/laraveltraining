<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduledClassController extends Controller
{

    public function index(){
        
    }
    public function create(){
        return view('instructor.schedule');
    }
    public function destroy(ScheduledClass $schedule){
        
    }
}
