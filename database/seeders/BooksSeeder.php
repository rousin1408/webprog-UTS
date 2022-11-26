<?php

namespace Database\Seeders;

use App\Models\books;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        books::create([
            'publisher_id' => 1,
            'title' => 'Tenggelamnya Kapal van der Wijck',
            'author' => 'Buya Hamka',
            'year' => '2013',
            'synopsis' => 'Pendekar Sutan membunuh Mamaknya (saudara laki-laki ibunya) karena masalah warisan, sehingga ia harus dihukum dengan diasingkan ke luar dari Batipuh, Minangkabau dan dipenjara di Cilacap selama 12 tahun.',
            'image' => 'buku1.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        books::create([
            'publisher_id' => 1,
            'title' => '5 Reasons and More',
            'author' => 'Galaxydust',
            'year' => '2020',
            'synopsis' => 'Yeona dan Jaehwan dalam mengungkapkan perasaan cintanya masing-masing. Namun, hal ini tidak mudah.',
            'image' => 'buku2.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        books::create([
            'publisher_id' => 1,
            'title' => 'Serial Bumi',
            'author' => 'Tere Liye',
            'year' => '2021',
            'synopsis' => 'Raib, yaitu seorang gadis belia berusia 15 tahun yang memiliki kemampuan menghilang.',
            'image' => 'buku3.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        books::create([
            'publisher_id' => 2,
            'title' => 'Dusta-Dusta Kecil (Big Little Lies)',
            'author' => 'Liane Moriarty',
            'year' => '2019',
            'synopsis' => 'Jane, seorang ibu tunggal, mengantar putranya ke sekolah dan berkenalan dengan wali murid lainnya yaitu Madeline dan Celeste.',
            'image' => 'buku4.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        books::create([
            'publisher_id' => 2,
            'title' => 'Almost Heaven',
            'author' => 'Judith Mcnaught',
            'year' => '2018',
            'synopsis' => 'Elizabeth Cameron merupakan gadis kebanggaan Inggris yang kecantikannya tidak akan pernah bisa tertandingi oleh siapa pun.',
            'image' => 'buku5.jpg',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
    }
}
