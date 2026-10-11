@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<a href="{{ route('books.index') }}">Detail Buku</a>

<ul>
 <h3>{{ $book->title }}</h3>
 <p>Penulis: {{ $book->author }}</p>
 <p>Tahun: {{ $book->year }}</p>
 <p>Stok: {{ $book->stock }}</p>
</ul>

@endsection