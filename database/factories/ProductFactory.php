<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker()->name(),
            'description'=>$this->faker()->nullable(),
            'price'=>$this->faker()->numberBetween(),
            'serving'=>$this->faker()->nullable(),
            ''
        ];
    }
}
