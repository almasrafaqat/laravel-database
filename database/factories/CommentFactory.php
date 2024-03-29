<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'           => $this->faker->text(500),
            'user_id'           => $this->faker->numberBetween(1, 3),
            'rating'            => $this->faker->numberBetween(1, 5),
            'commentable_type'  => $this->faker->randomElement(['App\Models\Image', 'App\Models\Room']),
            'commentable_id'    => $this->faker->numberBetween(1,10),
        ];
    }
}
