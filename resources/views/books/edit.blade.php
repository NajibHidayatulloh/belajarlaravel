@extends('layouts.app')

@section('content')
<h1>Edit Buku</h1>
<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')
      <div>
        <label>Judul Buku</label>
        <input type="text" name="title" placeholder="Judul Buku" Value="{{ old('title', $book->title) }}">

        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label>Penulis Buku</label>
        <input type="text" name="author" placeholder="Penulis Buku" Value="{{ old('author', $book->author) }}">
        @error('author')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label>Tahun Terbit</label>
        <input type="number" name="year" placeholder="Tahun Terbit" Value="{{ old('year', $book->year   ) }}">
        @error('year')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label>Jumlah Stok Buku</label>
        <input type="number" name="stock" placeholder="Stok Buku" Value="{{ old('stock', $book->stock) }}">
        @error('stock')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <label>Kategori Buku</label>
    <select name="category_id">
        <option value="">Pilih Kategori</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    @error('category_id')
        <p>{{ $message }}</p>
    @enderror

    
    <button type="submit">
        Update
    </button>
</form>
@endsection
