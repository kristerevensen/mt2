<?php

namespace App\Livewire;

use App\Models\Analytics;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Pages extends Component
{
    public $urls;
    public $perPage = 10;

    use WithPagination;

    public $startDate;
    public $endDate;


    public function mount()
    {
        //$this->urls = Analytics::where('project_code', $this->currentProjectCode())->groupby('url')->get();
        $this->startDate = Carbon::now()->subDays(28)->toDateString();
        $this->endDate = Carbon::now()->toDateString();

        $this->urls = Analytics::select('url',
                                DB::raw('url_code'),
                                DB::raw('MAX(title) as title'),
                                DB::raw('MAX(created_at) as created_at'),
                                DB::raw('count(url) as count'),
                                DB::raw('count(distinct(session_id)) as sessions'))
                       ->where('project_code', $this->currentProjectCode())
                       ->whereBetween('created_at', [$this->startDate, $this->endDate])
                       ->groupBy('url', 'url_code')
                       ->orderBy('count','desc')
                       //->get();gi
                       ->paginate($this->perPage);

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
