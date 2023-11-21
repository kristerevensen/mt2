<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all(); // Fetch projects
        dd($projects);
        return view('projects.index', compact('projects'));
    }
}
