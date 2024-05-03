<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    public function users() {
        return once(function() {
            return User::pluck('id');
        });
    }

    public function businesses() {
        return once(function() {
            return Business::pluck('id');
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
            'review'=> fake()->paragraph(),
            'user_id' => $this->users()->random(),
            'business_id' => $this->businesses()->random(),
        ];
    }
}
