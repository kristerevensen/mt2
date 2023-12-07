<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Analytics;


class AnalyticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 100; $i++) {
            Analytics::factory()->create([
                'url' => "https://domain1.no/side{$this->random()}",
                'project_code' => "P00000001"
            ]);
        }
    }

    function random(){
        return rand(1, 10);
    }
}
