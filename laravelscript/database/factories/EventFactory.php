<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(2, 3));
        return [
           'title'->$title,
           'slog'->Str::slug($title),
           'content'->faker->sentence(rand(4, 10)),
           'premium'->$this->faker->boolean(25),
           'start_at'->$this->faker->dateTimeBetween('now', '+2 months'),
           'end_at'->$this->faker->dateTimeBetween('+3 months', '+4 months')

        ];
    }
}
