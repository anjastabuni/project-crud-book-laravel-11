<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index', [
            'books' => Book::all()
        ]);
    }

    public function show(Book $book)
    {
        return view('book.show', [
            'book' => $book
        ]);
    }

    public function create()
    {
        return view('book.create');
    }
}
