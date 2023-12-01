<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnalyticsTableSeeder extends Seeder
{
    public function run()
    {
        // Define the number of records you want to create
        $numberOfRecords = 10;

        for ($i = 0; $i < $numberOfRecords; $i++) {
            DB::table('analytics')->insert([
                'url' => 'http://example.com/page' . $i,
                'title' => 'Page ' . $i,
                'referrer' => 'http://example.com/referrer' . $i,
                'device_type' => Str::random(10),
                'project_code' => 'P00000001',
                'session_id' => Str::random(10),
                'hostname' => 'example.com',
                'protocol' => 'http',
                'pathname' => '/page' . $i,
                'language' => 'en',
                'cookie_enabled' => true,
                'screen_width' => random_int(1024, 1920),
                'screen_height' => random_int(768, 1080),
                'history_length' => random_int(1, 10),
                'word_count' => random_int(100, 1000),
                'form_count' => random_int(0, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
