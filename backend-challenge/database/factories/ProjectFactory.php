<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'promoter_id' => \App\Models\Promoter::factory(),
            'wallet_balance' => $this->faker->numberBetween(0, 4000),
            'investment_goal' => $this->faker->numberBetween(10000, 400000),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence()
        ];
    }
}
