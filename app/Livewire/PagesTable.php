<?php

namespace App\Livewire;
use App\Models\Analytics;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class PagesTable extends Component
{
    public $urls;
    public $dates;

    public function mount()
    {
        //$this->urls = Analytics::where('project_code', $this->currentProjectCode())->groupby('url')->get();
        $this->urls = Analytics::select('url',
                                DB::raw('url_code'),
                                DB::raw('MAX(title) as title'),
                                DB::raw('MAX(created_at) as created_at'),
                                DB::raw('count(url) as count'),
                                DB::raw('count(distinct(session_id)) as sessions'))
                       ->where('project_code', $this->currentProjectCode())
                       ->groupBy('url', 'url_code')
                       ->orderBy('count','desc')
                       ->get();

    }

    public function render()
    {
        return view('livewire.pages-table');
    }

    public function currentProjectCode()
    {
        $Project = Project::where('team_id', Auth::user()->currentTeam->id)->first();
        return $Project->project_code;
    }
}
