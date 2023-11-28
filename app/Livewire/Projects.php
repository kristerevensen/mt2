<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridColumns;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class Projects extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
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

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
