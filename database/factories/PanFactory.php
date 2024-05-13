<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pan>
 */
class PanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word, 
            'precio' => $this->faker->randomFloat(2, 5, 20), 
        ];
    }

    protected $model=Pan::class;
}
