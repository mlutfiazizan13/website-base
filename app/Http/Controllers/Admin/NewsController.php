<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $news = News::all();
        return view('admin.content.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.content.news.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|mimes:png,jpg',
            'content_preview' => 'required',
            'content' => 'required'
            // 'image_ur' => 'required|file'
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route('news.index')->withErrors($validator->errors());
        }

        $news = new News();
        $news->title = $request->title;
        $news->slug = Str::slug($news->title);
        $news->content_preview = $request->content_preview;
        $news->content = $request->content;
        $news->created_by = auth()->user()->name;
 
        if($request->hasFile('image')){
            $time = Carbon::now()->format('Ymdhis');
            $file = $request->file('image');
            $name = str_replace(" ", "_", strtolower($request->title));
            $extension = $file->getClientOriginalExtension();
            $filename = $time.'_'.$name.'.'.$extension;

            $destPath = 'news';
            Storage::disk('public_2')->putFileAs($destPath, $file, $filename);
            $file_url = url('uploads/'.$destPath.'/'.$filename);

            // Storage::putFileAs('public/news', $file, $filename);
            // $file_url = url('storage/news/'.$filename);
            $news->image_name = $filename;
            $news->image_url = $file_url;
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'News Created Successfully');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.content.news.edit', compact('news'));
    }

    public function update($id,Request $request)
    {
        $news = News::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'nullable|mimes:png,jpg',
            'content_preview' => 'required',
            'content' => 'required'
            // 'image_ur' => 'required|file'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route('news.index')->withErrors($validator->errors());
        }

        $news->title = $request->title;
        $news->slug = Str::slug($news->title);
        $news->content_preview = $request->content_preview;
        $news->content = $request->content;
        $news->created_by = auth()->user()->name;

        if($request->hasFile('image')){
            //DELETE OLD IMAGE
            $parse_image = parse_url($news->image_url);
            $path_image = public_path($parse_image['path']);
            if (File::exists($path_image)) {
                File::delete($path_image);  
            }

            $time = Carbon::now()->format('Ymdhis');
            $file = $request->file('image');
            $name = str_replace(" ", "_", strtolower($request->title));
            $extension = $file->getClientOriginalExtension();
            $filename = $time.'_'.$name.'.'.$extension;

            $destPath = 'news';
            Storage::disk('public_2')->putFileAs($destPath, $file, $filename);
            $file_url = url('uploads/'.$destPath.'/'.$filename);
            
            $news->image_name = $filename;
            $news->image_url = $file_url;
        }
         
        $news->save();

        return redirect()->route('news.index')->with('success', 'News Updated Successfully');
    }

    public function destroy($id)
    {
        $image = News::find($id);

        $parse_image = parse_url($image->image_url);
        $path_image = public_path($parse_image['path']);
        if (File::exists($path_image)) {
            File::delete($path_image);  
        }

        $image->delete();

        return response()->json([
            "message" => "News deleted successfully"
        ]);
    }
}
