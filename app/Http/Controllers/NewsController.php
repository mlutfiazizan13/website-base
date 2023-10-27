<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(10);
        return view('web.news.news', compact('news'));
    }


    public function detail($slug)
    {
        $trending_news = News::all();
        $news = News::where('slug', $slug)->first();
        return view('web.news.news-detail', compact(['news', 'trending_news']));
    }
}
