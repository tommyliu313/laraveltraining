<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class WelcomeController extends Controller
{
    public function index(){
        //return view('welcome');
        //Using raw SQL queries
        //$user = DB::select('select * from user');
        //dd($user);
        // Query Builder
        //$users = DB::table('user')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        //dd($users);
        // $students = Student::all();
        // dd($students);

        $student = new Student();
        $student->name = "New";
        $student->email = "email@email.com";
        $student->save();


    }

}
