<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$wMPua3iytghAjW3nmM.U2u0hUigj80FreoSCzuzBfKhRnDErUHAdO', // password
            'gender' => $this->faker->randomElement(['Laki-Laki', 'Wanita']),
            'alamat' => $this->faker->address(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen']),
            'level_user' => $this->faker->randomElement(Level::all())['id_level'],
        ];
    }

    // /**
    //  * Indicate that the model's email address should be unverified.
    //  *
    //  * @return static
    //  */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }
}
