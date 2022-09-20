<?php

namespace Database\Factories;
namespace Illuminate\Support;
use vendor\laravel\framework\src\Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(1, 3));
        return [
            'name' => $title,
            'content' => Str::slug($title),
        ];
    }
}
