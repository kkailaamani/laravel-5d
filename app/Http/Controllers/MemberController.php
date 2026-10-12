<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Andi',
            'Novan Bahtiar',
            'Abdul Kadir',
            'Bambang Hariyanto',
            'Rosa A.S.',
        ];

        return view('members.index', compact('members'));
    }

    public function show($id)
    {
        return 'ID Member: ' . $id;
    }
}