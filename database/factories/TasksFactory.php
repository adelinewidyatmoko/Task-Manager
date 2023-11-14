<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //generate the afaker data of tasks
            'user_id'=>$this->faker->numberBetween(1,10),
            'image_id'=>$this->faker->numberBetween(1,10),
            'status_id'=>$this->faker->numberBetween(1,10),
            'title'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'note'=>$this->faker->paragraph(),
            'published_at'=>$this->faker->dateTimeBetween('-1 years','now'),
            'created_at'=>$this->faker->dateTimeBetween('-1 years','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 years','now'),
            'deleted_at'=>$this->faker->dateTimeBetween('-1 years','now'),

        ];
    }
}
