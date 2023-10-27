<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.content.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.content.gallery.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg',
            // 'image_ur' => 'required|file'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->route('gallery.index')->withErrors($validator->errors());
        }

        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->description = $request->description;


        if($request->hasFile('image')){
            // $disk = Storage::disk('public_2');
            $time = Carbon::now()->format('Ymdhis');
            $file = $request->file('image');
            $name = str_replace(" ", "_", strtolower($request->title));
            $extension = $file->getClientOriginalExtension();
            $filename = $time.'_'.$name.'.'.$extension;

            $destPath = 'gallery';
            Storage::disk('public_2')->putFileAs($destPath, $file, $filename);
            $file_url = url('uploads/'.$destPath.'/'.$filename);
            $gallery->image_name = $filename;
            $gallery->image_url = $file_url;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Image Created Successfully');
    }

    public function edit($id)
    {
        $image = Gallery::find($id);
        return view('admin.content.gallery.edit', compact('image'));
    }

    public function update($id,Request $request)
    {
        $image = Gallery::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg',
            // 'image_ur' => 'required|file'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->route('gallery.index')->withErrors($validator->errors());
        }
        $image->title = $request->title;
        $image->description = $request->description;

        if($request->hasFile('image')){


            //DELETE OLD IMAGE
            $parse_image = parse_url($image->image_url);
            $path_image = public_path($parse_image['path']);
            if (File::exists($path_image)) {
                File::delete($path_image);  
            }

            $time = Carbon::now()->format('Ymdhis');
            $file = $request->file('image');
            $name = str_replace(" ", "_", strtolower($request->title));
            $extension = $file->getClientOriginalExtension();
            $filename = $time.'_'.$name.'.'.$extension;
            
            $destPath = 'gallery';
            Storage::disk('public_2')->putFileAs($destPath, $file, $filename);
            $file_url = url('uploads/'.$destPath.'/'.$filename);
            $image->image_name = $filename;
            $image->image_url = $file_url;
        }
         
        $image->save();

        return redirect()->route('gallery.index')->with('success', 'Image Created Successfully');
    }

    public function destroy($id)
    {
        $image = Gallery::find($id);

        $parse_image = parse_url($image->image_url);
        $path_image = public_path($parse_image['path']);
        if (File::exists($path_image)) {
            File::delete($path_image);  
        }

        $image->delete();

        return response()->json([
            "message" => "Image deleted successfully"
        ]);
    }
}
