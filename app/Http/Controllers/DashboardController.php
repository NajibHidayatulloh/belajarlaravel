<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System';
        $description = 'Selamat datang di Sistem Informasi Perpustakaan.';

        $bookCount = 5;
        $memberCount = 5;
        $categoryCount = 5;

        return view('dashboard.index', compact(
            'title',
            'description',
            'bookCount',
            'memberCount',
            'categoryCount'
        ));
    }
}