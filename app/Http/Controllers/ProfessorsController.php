<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfessorsController extends Controller {


    public function dashboard()
    {
        return view('professors/professors-dashboard');
    }

    public function profile()
    {
        return view('professors/professors-profile');
    }

    public function password()
    {
        return view('professors/professors-password');
    }

    public function editConvenantIntership()
    {
        return view('professors/professors-edit-intership');
    }

    public function summaryIntership()
    {
        return view('professors/professors-summary-intership');
    }

    public function managementDatabase()
    {
        return view('professors/professors-management-database');
    }
}
