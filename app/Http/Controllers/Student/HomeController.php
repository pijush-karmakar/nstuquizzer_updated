<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/student/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('student.auth:student');
    }

    /**
     * Show the Student dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('student.home');
    }

    public function test() {
        $students = Student::all();

        return view('student.test')->compact('students');
    }

}