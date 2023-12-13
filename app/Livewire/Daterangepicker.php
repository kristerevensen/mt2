<?php

namespace App\Livewire;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Daterangepicker extends Component
{
    public $startDate;
    public $endDate;

    public function mount()
    {
        $this->startDate = Carbon::now()->subDays(28)->toDateString();
        $this->endDate = Carbon::now()->toDateString();
    }

    public function updateDateRange()
    {
        $this->emit('dateRangeUpdated', $this->startDate, $this->endDate);
    }

    public function dateRangeUpdated($startDate, $endDate)
    {
        $data = [];
        foreach ($this->urls as $url) {
            $data[] = $url;
        }

        $this->emit('dateRangeUpdated', $startDate, $endDate, $data);
    }

    public function render()
    {
        return view('livewire.daterangepicker');
    }

    public function currentProjectCode()
    {
        $Project = Project::where('team_id', Auth::user()->currentTeam->id)->first();
        return $Project->project_code;
    }
}
