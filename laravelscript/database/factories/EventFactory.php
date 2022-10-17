<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(2, 6));
        return [
           'title'=> $title,
           'slug'=> Str::slug($title),
           'content'=> $this->faker->sentence(rand(4, 10)),
           'premium'=>$this->faker->boolean(25),
           'start_at'=>$this->faker->dateTimeBetween('now', '+2 months'),
           'end_at'=>$this->faker->dateTimeBetween('+3 months', '+4 months')

        ];
    }
}
