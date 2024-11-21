<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index')->with('books',$books);
    }
    public function show($id)
    {

        $books= Book::find($id);
        
        return view('books.show')->with('book',$books);
    }
    public function create()
    {
        return view('books.create');
    }
    //store book
    
    public function store(Request $request)
    {
        $rules=[
            'title'=>'required',
            'author'=>'required',
            'isbn'=>'required|numeric',
            'price'=>'required|numeric',
            'stock'=>'required|numeric',
            

        ];
        $request->validate($rules);
        return 'All data validation success';
}
}