<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->text(),
            'slug' => $this->faker->word(),
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),

        ];
    }
}
