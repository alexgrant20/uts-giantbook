<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $bookCategories = BookCategory::with(['book', 'category'])
            ->where('category_id', $category->id)
            ->paginate(3);

        return view('category.show', compact('bookCategories'));
    }
}