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
            'title'=> 'required',
            'author'=> 'required',
            'isbn'=> 'required|digits:13',
            'price'=> 'required|numeric|min:0',
           'stock'=> 'required|integer|min:0',
        ];



        $request->validate($rules);
       $book = new Book();
       $book->title = $request->input('title');
       $book->author = $request->input('author');
       $book->isbn = $request->input('isbn');
       $book->price = $request->input('price');
       $book->stock = $request->input('stock');
       $book->save();
    //    return redirect()->route('books.index')->with('success','Book created successfully');
    return redirect()->route('books.show',$book->id)->with('success','Book created successfully');

}
}