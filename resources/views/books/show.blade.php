@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

    <h2>Detail Buku</h2>

    <p>ID Buku: {{ $id }}</p>

    @if($id)
        <p>Informasi buku dengan ID {{ $id }}.</p>
    @else
        <p>ID buku tidak tersedia.</p>
    @endif

    <a href="/books">Kembali ke Daftar Buku</a>

@endsection