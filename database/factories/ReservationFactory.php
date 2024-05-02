<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    public function users() {
        return once(function () {
            return User::where('role_id', 2)->pluck('id');
        });
    }

    public function businesses() {
        return once(function () {
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
            'saved_date'=> fake()->date(),
            'start_time' => fake()->time(),
            'quantity' => fake()->numberBetween(1, 10),
            'table_ubication' =>fake()->randomDigitNotNull(),
            'phone_number' =>fake()->numerify('####-####'),
            'type'=>fake()->word(),
            'user_id' => $this->users()->random(),
            'business_id' => $this->businesses()->random(),
        ];

    }
}
