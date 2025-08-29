<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        // Data sejarah sekolah
        $histories = [
            [
                'year' => '2007', 
                'color' => '[#fe914e]', 
                'title' => 'Pendirian Sekolah', 
                'desc' => 'SMK Telekomunikasi Telesandi Bekasi didirikan pada tahun 2008 oleh Yayasan Global Jaya Mandiri dengan tujuan menyediakan pendidikan kejuruan berkualitas di bidang teknologi informasi dan telekomunikasi.'
            ],
            [
                'year' => '2008', 
                'color' => '[#fe914e]', 
                'title' => 'Pertama Beroperasi', 
                'desc' => 'SMK Telekomunikasi Telesandi Bekasi mulai beroperasi dan menerima siswa-siswi baru. Dipimpin oleh bapak Alm. Syaifullah Ishaq selaku Kepala Sekolah. Pada awalnya ada 3 jurusan yaitu, Teknik Switching, Teknik Komputer dan Jaringan dan Multimedia.'
            ],
            [
                'year' => '2018', 
                'color' => '[#fe914e]', 
                'title' => 'Pergantian Kepala Sekolah', 
                'desc' => 'Pergantian kepemimpinan sekolah dengan bapak Guruh Wijanarko, S.T. sebagai kepala sekolah yang baru, membawa semangat baru dan inovasi dalam pengelolaan sekolah. Sudah banyak program dan kegiatan baru yang diluncurkan untuk meningkatkan kualitas pendidikan.'
            ],
            [
                'year' => date('Y'), 
                'color' => '[#fe914e]', 
                'title' => 'Era Sekarang', 
                'desc' => 'SMK Telekomunikasi Telesandi Bekasi terus beradaptasi dengan perkembangan teknologi dan kebutuhan industri. Berbagai program baru diluncurkan untuk meningkatkan kualitas pendidikan dan keterampilan siswa. Mencetak lulusan yang siap menghadapi tantangan di dunia kerja, dan siswa-siswi yang berprestasi.'
            ],
        ];

        // Data staf pengajar
        $staff = [
            [
                'name' => 'Guruh Wijanarko, S.T', 
                'role' => 'Kepala Sekolah',
                'img' => asset('img/ic_tels.webp'),
                'desc' => 'Lulusan Sarjana Teknik terbaik dengan pengalaman lebih dari 10 tahun di bidang pendidikan.'
            ],
            [
                'name' => 'Sari Gumbira, M.Kom', 
                'role' => 'Wakil Kepala Sekolah Bidang Kurikulum',
                'img' => asset('img/ic_tels.webp'),
                'desc' => 'Memimpin pengembangan kurikulum dan memastikan kualitas pembelajaran di sekolah.'
            ],
            [
                'name' => 'Tiara Kusuma Dewi, S.Tr', 
                'role' => 'Kepala Program RPL',
                'img' => asset('img/ic_tels.webp'),
                'desc' => 'Mengelola program keahlian Rekayasa Perangkat Lunak dan memastikan kualitas pembelajaran.'
            ],
        ];

        return view('about', compact(['histories', 'staff']));
    }
}
