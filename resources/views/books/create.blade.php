@extends('layouts.app')

@section('content')
<h1>Tambah Buku Baru</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    
    <div>
        <label>Judul Buku</label>
        <input type="text" name="title" placeholder="Judul Buku" Value="{{ old('title') }}">

        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label>Penulis Buku</label>
        <input type="text" name="author" placeholder="Penulis Buku" Value="{{ old('author') }}">
        @error('author')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label>Tahun Terbit</label>
        <input type="number" name="year" placeholder="Tahun Terbit" Value="{{ old('year') }}">
        @error('year')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label>Jumlah Stok Buku</label>
        <input type="text" name="stock" placeholder="Stok Buku" Value="{{ old('stock') }}">
        @error('stock')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <label>Kategori Buku</label>
    <select name="category_id">
        <option value="">Pilih Kategori</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    @error('category_id')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">
        Simpan
    </button>
</form>
@endsection