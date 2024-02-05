<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $bookReserv = Book::where('reservation', 1)->get();
        $bookDispo = Book::where('reservation', 0)->get();

         return view('home',['bookReserv'=>$bookReserv,'bookDispo'=>$bookDispo]);
      }
     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book= ['title', 'description', 'author', 'reservation'];
        $books= Book::create($request->only($book));
        session()->flash('message','book has created');
        return redirect()->route("books.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book=Book::findOrFail($id);
        return view('detail',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);
        $book->title = $request->input("title");
        $book->description = $request->input("description");
        $book->author = $request->input("author");
        $book->save();
        session()->flash('message','book has update with succ');
        return redirect()->route("books.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
    book::destroy($id);
    session()->flash('message','book has deleted with succ');
    return redirect()->route("books.index");
    }
    public function reserver($id)
    {
        $reserver=Book::findOrFail($id);
        $reserver->reservation='1';
        $reserver->save();
        return redirect()->route('books.index');
    }

    public function recuperer($id)
    {
        $recuper=Book::findOrFail($id);
        $recuper->reservation='0';
        $recuper->save();
        return redirect()->route('books.index');
    }
    
}
