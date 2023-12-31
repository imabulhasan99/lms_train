<?php

namespace Database\Factories\Course;

use App\Models\User;
use App\Models\Course\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        

        return [
            'title' => $this->faker->sentence,
            'short_desc' => $this->faker->paragraph,
            'overview' => $this->faker->paragraph,
            'lession' => $this->faker->word,
            'duration' => $this->faker->time,
            'enrolled' => $this->faker->numberBetween(0, 100),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'level' => $this->faker->randomElement(['beginner','intermediate','advanced']),
            'instrctor_id' => User::inRandomOrder()->value('id') ?: User::factory()->create()->id,
            'reviews_id' => Review::inRandomOrder()->value('id') ?: Review::factory()->create()->id,
            'category' => $this->faker->word,
        ];
    }
}
