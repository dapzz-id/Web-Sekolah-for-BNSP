<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = \App\Models\News::latest()->take(6)->get();
        
        return view('news', compact('news'));
    }
}
