<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $programs = [
            [
                'icon' => 'ic_rpl.webp',
                'title' => 'Rekayasa Perangkat Lunak',
                'desc' => 'Pelajari pengembangan perangkat lunak, mulai dari analisis kebutuhan hingga pengujian dan pemeliharaan aplikasi.'
            ],
            [
                'icon' => 'ic_tkj.webp',
                'title' => 'Teknik Komputer dan Jaringan',
                'desc' => 'Pelajari jaringan komputer, keamanan siber, dan teknologi cloud untuk mempersiapkan diri Anda di dunia IT.'
            ],
            [
                'icon' => 'ic_dkv.webp',
                'title' => 'Desain Komunikasi Visual',
                'desc' => 'Kembangkan keterampilan desain grafis, animasi, dan multimedia untuk menciptakan karya visual yang menarik.'
            ]
        ];

        $news = \App\Models\News::latest()->take(3)->get();

        return view('index', compact('programs', 'news'));
    }
}
