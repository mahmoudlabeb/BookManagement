<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'author' => 'required|string|max:255',
        ]);

        Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'author' => $request->author,
        ]);

        return redirect()->route('books.index')->with('status', 'Book created successfully!');
    }
}