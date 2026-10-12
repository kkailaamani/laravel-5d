@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}">Detail</a>
                        <a href="{{ route('books.edit', $book) }}">Edit</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection