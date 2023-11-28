<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Team;
use Dotenv\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Str;

class ProjectController extends Controller
{

    public $teams = [];
    //
    public function index()
    {

        $projects = Project::paginate();
        return view("projects", compact("projects"));
    }

    public function create(User $user)
    {
        $teams = $user->teams();
        dd($teams);
        $teams = [];

        return view('projects.newproject', ['teams' => $teams]);
    }

    public function store(array $input)
    {

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
    public function testing() {

    }
}
