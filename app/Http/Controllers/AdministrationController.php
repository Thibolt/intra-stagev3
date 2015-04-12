<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdministrationController extends Controller {

    public function managementProfessors()
    {
        return view('professors/administration/professors-management-professors');
    }

    public function modifyProfessors($login)
    {
        return view('professors/administration/professors-modify-professors');
    }

    public function createProfessors()
    {
        return view('professors/administration/professors-create-professors');
    }

    public function managementStudents()
    {
        return view('professors/administration/professors-management-students');
    }

    public function studentsList()
    {
        return view('professors/administration/professors-modify-students-list');
    }

    public function editTemplateConvenant()
    {
        return view('professors/administration/professors-edit-template-convenant');
    }
}
