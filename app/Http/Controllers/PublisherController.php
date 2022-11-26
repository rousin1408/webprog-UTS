<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\publishers;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisher()
    {
        $publisher = publishers::all();


        $data = [
            'categories' => categories::all(),
            'publishers' => publishers::with('books')->get(),
        ];

        return view('publisher', $data);
    }
}
