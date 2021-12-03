<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'deskripsi' => $this->faker->paragraph(),
            'thumbnail' => $this->faker->word(),
        ];
    }
}
