<?php

namespace Database\Seeders;

use App\Models\book_category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        book_category::create([
            'book_id' => 1,
            'category_id' => 1,
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        book_category::create([
            'book_id' => 2,
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        book_category::create([
            'book_id' => 3,
            'category_id' => 3,
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        book_category::create([
            'book_id' => 4,
            'category_id' => 4,
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        book_category::create([
            'book_id' => 5,
            'category_id' => 5,
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
    }
}
