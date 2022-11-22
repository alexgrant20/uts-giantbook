<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('publisher')->paginate(3);

        return view('index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }
}