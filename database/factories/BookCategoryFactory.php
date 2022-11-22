<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookCategory>
 */
class BookCategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'book_id' => random_int(1, 50),
            'category_id' => random_int(1, 10)
        ];
    }
}