<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publisher>
 */
class PublisherFactory extends Factory
{
    public function definition()
    {
        $publisherImage = [
            'image/publisher-1.png',
            'image/publisher-2.png',
            'image/publisher-3.avif',
            'image/publisher-4.png',
        ];

        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'image' => $publisherImage[random_int(0, 3)],
        ];
    }
}