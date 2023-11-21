<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public $teams = [];
    //
    public function index()
    {

        //return view('projects.index');
    }

    public function create()
    {

        $data = [
            'teams' => []
        ];
        return view('projects.newproject', $data);
    }

    public function edit($projectId)
    {
        // Logic to handle the edit request
        // Typically, you'll retrieve the project and return an edit view
    }
    public function destroy($projectId)
    {
        // Logic to delete the project
        // This usually includes finding the project by ID and deleting it
    }
}
