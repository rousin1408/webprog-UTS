<?php

namespace Database\Seeders;

use App\Models\categories;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categories::create([
            'name' => 'Romance',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);

        categories::create([
            'name' => 'Fanfiction',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);

        categories::create([
            'name' => 'Science Fiction',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);

        categories::create([
            'name' => 'Thriller',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);

        categories::create([
            'name' => 'Historical',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
    }
}


// Romantis. Genre novel ini sering banget nih kita temuin di toko buku dan paling banyak diminati orang. ...
// 2. Fanfiction. ...
// 3. Science Fiction (Fiksi Ilmiah) ...
// 4. Fantasi. ...
// Thriller / Suspense / Mystery.
