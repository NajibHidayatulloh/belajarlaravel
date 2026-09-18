@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book['judul'] }}</strong><br>
                Penulis: {{ $book['penulis'] }}<br>
                Tahun Terbit: {{ $book['tahun'] }}<br>
                <a href="/books/{{ $book['id'] }}">Lihat Detail</a>
            </li>

            <br>
        @endforeach
    </ul>

@endsection