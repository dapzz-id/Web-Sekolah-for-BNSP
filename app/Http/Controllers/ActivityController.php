<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        $achievements = [
            [
                'title' => 'Juara 6 LKS ITSSB',
                'desc' => 'Lomba Keterampilan Siswa Tingkat Nasional 2025'
            ],
            [
                'title' => 'Juara 1 LKS ITSSB',
                'desc' => 'Lomba Keterampilan Siswa Tingkat Provinsi 2025'
            ],
            [
                'title' => 'Juara 4 LKS WEB TECH',
                'desc' => 'Lomba Keterampilan Siswa Tingkat Provinsi 2024'
            ]
        ];
        return view('activities', compact('achievements'));
    }
}
