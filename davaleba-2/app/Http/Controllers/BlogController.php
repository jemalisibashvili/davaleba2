<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function students(Request $request)
    {
        return view('pages.students',['students' =>Student::paginate(10)]);

    }
    public function student(Student $student)
    {
        return view('pages.student',['student' => $student]);
    }


}