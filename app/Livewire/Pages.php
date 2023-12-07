<?php

namespace App\Livewire;

use App\Models\Analytics;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Pages extends Component
{
    public $urls;
    public $perPage = 10;

    public function mount()
    {
        $this->urls = Analytics::where('project_code', $this->currentProjectCode())->get();
    }

    // Retrieve the current project code based on the current user's team
    public function currentProjectCode()
    {
        $Project = Project::where('team_id', Auth::user()->currentTeam->id)->first();
        return $Project->project_code;
    }

    public function render()
    {
       //dd($this->currentProjectCode());
        return view('livewire.pages');
    }
}
