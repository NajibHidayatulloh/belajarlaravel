@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

@if(session('success'))
    <p>
        {{ session('success') }}
    </p>
    @endif
<a href="{{ route('books.create') }}">Tambah Buku Baru</a>
<ul>
<h1>Daftar Buku</h1>
<p>Koleksi buku pada Sistem Informasi Perpustakaan.</p>
</ul>

    <ul>
       @foreach($books as $book)
 <h3>{{ $book->title }}</h3>
 <a href="{{ route('books.show', $book) }}">Lihat Detail</a>
 <a href="{{ route('books.edit', $book) }}">Edit Buku</a>
 <form action="{{ route('books.destroy', $book) }}" method="POST">
     @csrf
     @method('DELETE')
        <button type="submit">Hapus Buku</button>
 </form>
       @endforeach
    </ul>

@endsection