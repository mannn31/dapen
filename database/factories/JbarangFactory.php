<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JbarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_jenis' => $this->faker->name(),
        ];
    }
}
