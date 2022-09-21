<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
{
    protected $model = student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastname(),
            'prenom' => $this->faker->firstname,
            'classe_id' => rand(1,7) 
        ];
    }
}
