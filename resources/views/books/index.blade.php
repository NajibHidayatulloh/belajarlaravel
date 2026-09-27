@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<ul>
<h1>Daftar Buku</h1>
<p>Koleksi buku pada Sistem Informasi Perpustakaan.</p>
</ul>

    <ul>
       @foreach($books as $book)
       <li>
 <h3>{{ $book->title }}</h3>
 <p>Penulis: {{ $book->author }}</p>
 <p>Tahun: {{ $book->year }}</p>
 <p>Stok: {{ $book->stock }}</p>
</li>
@endforeach
    </ul>

    <h2>informasi stok</h2>
    <p>Total stok buku: {{ $stock }}</p>

@endsection