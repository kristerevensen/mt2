<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;
use App\Services\DataForSEOService;

class Projects extends Component
{

    public $projects = [];


    public function mount()
    {
        $this->projects = [
            [
                'id' => '1',
                'description' => 'Project Alpha Description',
                'name' => 'Project Alpha',
                'domain' => 'domain.no',
                'owner_id' => 1, // Replace with actual user IDs
                'team_id' => 1, // Replace with actual team IDs
                'project_id' => 'PRJ00001'
            ],
            [
                'id' => '2',
                'description' => 'Project Beta Description',
                'name' => 'Project Beta',
                'domain' => 'domain2.no',
                'owner_id' => 1, // Replace with actual user IDs
                'team_id' => 1, // Replace with actual team IDs
                'project_id' => 'PRJ00002'
            ],
            [
                'id' => '3',
                'description' => 'Project Gamma Description',
                'name' => 'Project Charlie',
                'domain' => 'domain3.no',
                'owner_id' => 1, // Replace with actual user IDs
                'team_id' => 1, // Replace with actual team IDs
                'project_id' => 'PRJ00003'
            ],
        ];

        // Convert each project array to an object
        $this->projects = array_map(function($project) {
            return json_decode(json_encode($project));
        }, $this->projects);
    }

    public function render()
    {

        return view('livewire.projects');
    }

}
