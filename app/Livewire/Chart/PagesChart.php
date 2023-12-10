<?php

namespace App\Livewire\Chart;

use App\Models\Analytics;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PagesChart extends Component
{
    public $dates; //

    public function mount(){
        $this->dates = Analytics::select(
            DB::raw('DATE(created_at) as dato'),
            DB::raw('COUNT(url) as pageviews'),
            DB::raw('COUNT(DISTINCT(url)) as sessions'))
            ->where('project_code', $this->currentProjectCode())
            ->groupBy('dato')
            ->orderBy('dato', 'asc')
            ->get();
    }
    public function render()
    {
        return view('livewire.chart.pages-chart');
    }
    public function currentProjectCode()
    {
        $Project = Project::where('team_id', Auth::user()->currentTeam->id)->first();
        return $Project->project_code;
    }
}
