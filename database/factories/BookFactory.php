<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition()
    {
        $bookImage = [
            'image/book-1.jpg',
            'image/book-2.jpeg',
            'image/book-3.jpg',
            'image/book-4.jpg',
            'image/book-5.jpeg',
            'image/book-6.jpeg',
            'image/book-7.jpg',
        ];

        return [
            'title' => fake()->name(),
            'author' => fake()->name(),
            'year' => fake()->year(),
            'synopsis' => fake()->text(),
            'image' => $bookImage[random_int(0, 6)],
        ];
    }
}