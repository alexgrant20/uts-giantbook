<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Publisher::factory()->count(50)->has(
            Book::factory()
        )->create();

        Category::factory()->count(10)->create();

        BookCategory::factory()->count(10)->create();
    }
}