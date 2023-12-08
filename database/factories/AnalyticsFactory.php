<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Analytics>
 */
class AnalyticsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->url,
            'title' => $this->faker->sentence,
            'referrer' => $this->faker->url,
            'meta_description' => $this->faker->sentence,
            'device_type' => $this->faker->randomElement(['desktop', 'mobile', 'tablet']),
            'project_code' => 'P00000001',
            'session_id' => $this->faker->uuid,
            'hostname' => $this->faker->domainName,
            'protocol' => $this->faker->randomElement(['http', 'https']),
            'pathname' => $this->faker->slug,
            'language' => $this->faker->languageCode,
            'cookie_enabled' => $this->faker->boolean,
            'screen_width' => $this->faker->numberBetween(640, 1920),
            'screen_height' => $this->faker->numberBetween(480, 1080),
            'history_length' => $this->faker->numberBetween(1, 10),
            'word_count' => $this->faker->numberBetween(100, 1000),
            'form_count' => $this->faker->numberBetween(0, 10),
            // ... tilføy eventuelle andre felt du trenger
        ];
    }
}
