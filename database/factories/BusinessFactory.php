<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    public function types() {
        return once(function() {
            return Type::pluck('id');
        });
    }

    public function users() {
        return once(function () {
            return User::where('role_id', 1)->pluck('id');
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
            'name' => fake()->company(),
            'type_id' => $this->types()->random(),
            'location' =>fake()->address(),
            'phone_number' =>fake()->numerify('####-####'),
            'email'=> fake()->unique()->safeEmail(),
            'schedule' => fake()->words(3, true),
            'user_id' => $this->users()->random(),
        ];
    }
}
