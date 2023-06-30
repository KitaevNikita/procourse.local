<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male','female']);
        return [
            'surname' => $this->faker->lastName($gender),
            'name' => $this->faker->firstName($gender),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('1'),
            'remember_token' => Str::random(10)
        ];
    }

    /**
    * Состояние для учетной записи администратора
    */
    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'email' => 'admin@test.ru',
            ];
        });
    }


    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
