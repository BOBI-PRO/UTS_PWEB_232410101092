<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginPage() {
        return view('login');
    }
    public function Login(Request $request) {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }
    public function dashboard(Request $request) {
        $username = $request->query('username');
        $articles = [
            [
                'id' => 1,
                'title' => 'Pengolahan Kayu Jati yang Berkelanjutan',
                'summary' => 'Teknik modern dalam pengolahan kayu jati tanpa merusak lingkungan...',
                'category' => 'Pengolahan',
                'date' => '15 Mei 2023',
                'views' => 1245,
                'image' => 'jati.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Keunggulan Kayu Merbau untuk Furniture',
                'summary' => 'Kayu merbau memiliki kepadatan dan keawetan yang membuatnya ideal untuk...',
                'category' => 'Material',
                'date' => '2 Juni 2023',
                'views' => 892,
                'image' => 'merbau.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Teknik Pengawetan Kayu Tradisional',
                'summary' => 'Metode pengawetan kayu ala nenek moyang yang masih relevan hingga kini...',
                'category' => 'Pengawetan',
                'date' => '28 April 2023',
                'views' => 1567,
                'image' => 'pengawetan.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Inovasi Penggunaan Kayu Sengon',
                'summary' => 'Kayu sengon yang sering dianggap rendah ternyata memiliki potensi besar ketika...',
                'category' => 'Inovasi',
                'date' => '10 Mei 2023',
                'views' => 743,
                'image' => 'sengon.jpg'
            ],
        ];


        return view('dashboard',  compact('articles'),['username' => $username]);
    }
    public function profile(Request $request) {
        $username = $request->query('username');
      return view('profile', ['username' => $username]);
    }

    public function pengelolaan(Request $request) {

        $username = $request->query('username');
        $dataKayu = [
            ['nama' => 'Jati', 'asal' => 'Jawa Tengah', 'harga' => 500000],
            ['nama' => 'Meranti', 'asal' => 'Kalimantan', 'harga' => 350000],
            ['nama' => 'Mahoni', 'asal' => 'Sumatera', 'harga' => 400000],
            ['nama' => 'Sengon', 'asal' => 'Jawa Barat', 'harga' => 200000],
            ['nama' => 'Bamboo', 'asal' => 'Jawa Timur', 'harga' => 150000],
            ['nama' => 'Cendana', 'asal' => 'Nusa Tenggara', 'harga' => 800000],
            ['nama' => 'Kayu Manis', 'asal' => 'Sumatera Utara', 'harga' => 600000],
            ['nama' => 'Kayu Merbau', 'asal' => 'Papua', 'harga' => 700000],
        ];


        return view('pengelolaan', compact('dataKayu'), ['username' => $username]);
    }
}

