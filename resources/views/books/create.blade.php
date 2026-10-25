@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" placeholder="Judul Buku" value="{{ old('title', $book->title ?? '') }}">

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Penulis</label>
            <input type="text" name="author" placeholder="Penulis" value="{{ old('author', $book->author ?? '') }}">

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year" placeholder="Tahun Terbit" value="{{ old('year', $book->year ?? '') }}">

            @error('year')
                <p>{{ $message }}</p>
            @enderror   
        </div>
        <div>
            <label>jumlah Stok Buku</label>
            <input type="number" name="stock" placeholder="Stok Buku" value="{{ old('stock', $book->stock ?? '') }}">

            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id">
                <option value="">Pilih kategori</option>

                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @selected(old('category_id') == $category->id)
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>
@endsection