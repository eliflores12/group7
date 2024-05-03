<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function businesses() {
        return once(function() {
            return Business::pluck('id');
        });
    }

    public function categories() {
        return once(function() {
            return Category::pluck('id');
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->words(3, true),
            'description'=>fake()->sentence(),
            'price'=>fake()->numberBetween(1, 10),
            'serving'=>fake()->numerify('#-units'),
            'business_id' => $this->businesses()->random(),
            'category_id' => $this->categories()->random(),
        ];
    }
}
