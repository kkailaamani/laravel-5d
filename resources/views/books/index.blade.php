@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<h2>Daftar Buku</h2>

<p>Daftar buku yang tersedia di perpustakaan.</p>

<p>http://127.0.0.1:8000/books</p>

@foreach($books as $book)

    <h3>{{ $book->title }}</h3>

    <p>Penulis: {{ $book->author }}</p>
    <p>Tahun: {{ $book->year }}</p>
    <p>Stok: {{ $book->stock }}</p>

    @if($book->stock > 0)
        <p>Stok tersedia</p>
    @else
        <p>Stok habis</p>
    @endif

@endforeach

@endsection