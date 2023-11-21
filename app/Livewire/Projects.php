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

    public function mount($projects)
    {
        $this->projects = $projects;

    }

    public function render()
    {
        return view('livewire.projects');
    }



}
