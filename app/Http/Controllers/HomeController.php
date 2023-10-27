<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $news = News::latest()->take(3)->get();
        $galleries = Gallery::latest()->take(5)->get();
        // dd($news);
        return view('web.home', compact('news', 'galleries'));
    }
}
