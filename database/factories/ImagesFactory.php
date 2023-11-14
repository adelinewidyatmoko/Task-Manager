<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Images>
 */
class ImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //generate te data of images fake
            'description'=>$this->faker->sentence(),
            'path'=>$this->faker->imageUrl(),//path
            'created_at'=>$this->faker->dateTimeBetween('-1 years','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 years','now'),
        ];
    }
}
