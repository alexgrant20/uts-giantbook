<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::orderBy('name')->paginate(9);

        return view('publisher.index', compact('publishers'));
    }

    public function show(Publisher $publisher)
    {
        $books = Book::where('publisher_id', $publisher->id)->paginate(3);

        return view('publisher.show', compact('publisher', 'books'));
    }
}