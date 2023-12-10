<?php

namespace App\Livewire;

use App\Models\Analytics;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Pages extends Component
{
    public $urls;
    public $dates;
    public $perPage = 10;

    public function mount()
    {
        //$this->urls = Analytics::where('project_code', $this->currentProjectCode())->groupby('url')->get();
        $this->urls = Analytics::select('url',
                                DB::raw('MAX(title) as title'),
                                DB::raw('MAX(created_at) as created_at'),
                                DB::raw('count(url) as count'),
                                DB::raw('count(distinct(session_id)) as sessions'))
                       ->where('project_code', $this->currentProjectCode())
                       ->groupBy('url')
                       ->orderBy('count','desc')
                       ->get();





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
