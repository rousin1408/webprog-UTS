<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => categories::all(),
            'books' => books::all(),
        ];

        return view('index', $data);
    }

    public function detail(Request $request, $id)
    {
        $data = [
            'categories' => categories::all(),
            'book' => books::where('id', $id)->first(),
        ];

        return view('detail', $data);
    }
}
