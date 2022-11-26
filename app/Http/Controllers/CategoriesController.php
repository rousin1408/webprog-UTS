<?php

namespace App\Http\Controllers;

use App\Models\book_category;
use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category(Request $request, $id)
    {
        $data = [
            'categories' => categories::all(),
            'books' => book_category::with('book')->where('category_id', $id)->get(),
            'current' => categories::where('id', $id)->first()
        ];

        return view('category', $data);
    }

}
