<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;

class Projects extends Component
{

    public $projects;

    public function render()
    {
        //$projects = Project::where("user_id", auth("")->user()->id)->paginate(10);
        $this->projects = Project::all();
        return view('livewire.projects',[
            'projects' => $this->projects
        ]);
    }

    public function mount($projects)
    {
        //$this->projects = Project::whereIn('id', $projects)->get();
        $this->projects = Project::all();
    }

}
