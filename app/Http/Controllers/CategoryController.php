<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Pemrograman PHP',
            'Framework Laravel',
            'Basis Data',
            'Algoritma dan Pemrograman',
            'Pemrograman Berorientasi Objek',
        ];

        return view('categories.index', compact('categories'));
    }
}