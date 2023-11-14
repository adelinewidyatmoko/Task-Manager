<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //tulis nama generate nya depends to its table's names
            'name'=>$this->faker->name(),
            'email'=>$this->faker->unique()->freeEmail(),
            'email_verified_at'=>$this->faker->dateTimeBetween('-1 years','now'),
            'password'=>$this->faker->password(),
            'remember_token'=>$this->faker->password(),
            'created_at'=>$this->faker->dateTimeBetween('-1 years','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 years','now'),
            
        ];
    }
}
