<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Promoter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promoter>
 */
class PromoterFactory extends Factory
{

    protected $model = Promoter::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'company_name' =>fake()->name(),
            'company_description' => $this->faker->sentence()
        ];
    }
}
