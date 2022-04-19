<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CertificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->sentence,
            'subject' => $this->faker->sentence,
            'school' => $this->faker->sentence,
            'date' => $this->faker->date(),
        ];
    }
}
