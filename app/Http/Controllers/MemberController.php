<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Dika Saputra',
            'Novita Sari',
            'Syifa Rahmawati',
            'Toni',
            'Rachel',
        ];

        return view('members.index', compact('members'));
    }

    public function show($id)
    {
        return 'ID Member: ' . $id;
    }
}