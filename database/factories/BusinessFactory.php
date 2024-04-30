<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Businesses>
 */
class BusinessesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker()->company(),
            'saved_date'=> $this->faker()->date(),
            'start_time' => $this->faker()->date(),
            'quantity' => $this->faker()->numberBetween(0,10),
            'table_ubication' =>$this->faker()->timezone(),
            'phone_number' =>$this->faker()->numberBetween(0,10),
            'type'=>$this->faker()->nullable(),
            'email'=>$this->faker->unique()->safeEmail(),
        ];
    }
}
