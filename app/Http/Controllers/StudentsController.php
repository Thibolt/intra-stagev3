<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function dashboard()
    {
        return view('students/students-dashboard');
    }

    public function researchInternship()
    {
        return view('students/students-research-internship');
    }

    public function submitInternship()
    {
        return view('students/students-submit-internship');
    }

    public function evaluateInternship()
    {
        return view('students/students-evaluate-internship');
    }

}