<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    public function index()
    {
        $books = Book::where ('stock','>',0)->get();
        return view('books.index')->with('books',$books);
    }
    public function show($id)
    {

        $books= Book::find($id);
        
        return view('books.show')->with('book',$books);
    }
}
