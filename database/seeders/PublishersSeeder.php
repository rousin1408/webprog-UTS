<?php

namespace Database\Seeders;

use App\Models\publishers;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publishers::create([
            'name' => 'Erlangga',
            'address' => 'Jl. H. Baping No. 100, Ciracas, Jakarta Timur, Indonesia',
            'phone' => '0811 1450 436',
            'email' => 'customercare@erlangga.com',
            'image' => 'erlangga.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);

        publishers::create([
            'name' => 'Gramedia',
            'address' => 'Jl. H. Baping No. 200, Ciracas, Jakarta Timur, Indonesia',
            'phone' => '0811 3456 235',
            'email' => 'customercare@gramedia.com',
            'image' => 'gramedia.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
    }
}
