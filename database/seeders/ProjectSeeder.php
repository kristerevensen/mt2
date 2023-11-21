<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ensure there are users and teams in the database
        if (User::count() == 0 || Team::count() == 0) {
            echo "Please ensure there are users and teams in the database.\n";
            return;
        }

        // Create 10 dummy projects
        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'description' => 'Dummy project description ' . $i,
                'owner_id' => '1',
                'team_id' => '1',
                'project_id' => Str::random(8), // Generate a random string
            ]);
        }
    }
}
