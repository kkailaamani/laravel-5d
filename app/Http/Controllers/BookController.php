<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('category')->get();

        return view('books.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255|unique:books,title',
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:10000',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $tittle = 'Detail Buku';
        return view('books.show', compact('tittle','book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $tittle = 'Edit Buku';
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories', 'tittle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255|unique:books,title,' . $book->id,
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:10000',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($validated);
        
        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
            $book->delete();

            return redirect()->route('books.index');
    }
}