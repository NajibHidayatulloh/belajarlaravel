<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // $title = 'Daftar Buku';
        // $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';

        // $books = [
        //     [
        //         'id' => 1,
        //         'judul' => 'Pemrograman PHP',
        //         'penulis' => 'Widodo',
        //         'tahun' => 2022
        //     ],
        //     [
        //         'id' => 2,
        //         'judul' => 'Laravel untuk Pemula',
        //         'penulis' => 'Maikel',
        //         'tahun' => 2023
        //     ],
        //     [
        //         'id' => 3,
        //         'judul' => 'Basis Data',
        //         'penulis' => 'Alex',
        //         'tahun' => 2021
        //     ],
        //     [
        //         'id' => 4,
        //         'judul' => 'Algoritma dan Pemrograman',
        //         'penulis' => 'Pworabo',
        //         'tahun' => 2022
        //     ],
        //     [
        //         'id' => 5,
        //         'judul' => 'Pemrograman Berorientasi Objek',
        //         'penulis' => 'Joko',
        //         'tahun' => 2024
        //     ],
        // ];

        $books = Book::all();
        $stock = Book::sum('stock');


       return view('books.index', compact('books','stock'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}