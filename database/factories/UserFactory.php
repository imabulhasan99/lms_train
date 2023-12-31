<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'first_name'     => $this->faker->firstName,
           'last_name'      => $this->faker->lastName,
           'email'          => $this->faker->unique()->safeEmail,
           'password'       => Hash::make(123456),
           'phone'          => $this->faker->phoneNumber,
           'dob'            => $this->faker->date('d-m-Y'),
           'country'        => $this->faker->country,
           'address_one'    => $this->faker->streetAddress,
           'address_two'    => $this->faker->secondaryAddress,
           'city'           => $this->faker->city,
           'zip_code'       => $this->faker->numberBetween(1000,10000),
           'role'           => $this->faker->randomElement(['student','instrauctor']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
