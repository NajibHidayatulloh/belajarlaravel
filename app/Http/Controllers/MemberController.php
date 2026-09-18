<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Najib',
            'Ali',
            'Lukman',
            'Rizki',
            'Nabil'
        ];

        return view('members.index', compact('members'));
    }

    public function show($id)
    {
        return 'ID Member: ' . $id;
    }
}