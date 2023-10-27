<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        // $galleries = News::all();
        return view('web.gallery.gallery', compact('galleries'));
    }
}
