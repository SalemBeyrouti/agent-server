<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     
     */
    protected $model = Agent::class;
    
    public function definition(): array
    {
        return [
            "name"=>$this->faker->name(),
            "email"=>$this->faker->unique()->safeEmail()
        ];
    }
}
