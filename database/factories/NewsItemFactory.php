<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsItem>
 */
class NewsItemFactory extends Factory
{
    public function products() {
        return once(function() {
            return Product::pluck('id');
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
            'title'=>fake()->sentence(),
            'description'=>fake()->paragraph(),
            'end_date'=>fake()->date(),
            'product_id' => $this->products()->random(),
        ];
    }
}
