<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\gallery\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index(){
        $galleries = GalleryResource::collection(Gallery::with('user')->latest()->paginate(8))->resource;
        return view('admin.galleries.index' , compact('galleries'));
    }
    public function store(Request $request){
        $request->validate([
            'file' =>['required' , 'max:20480']
        ]);
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $format = $file->getClientOriginalExtension();
        $url = '/upload/image';
        $path = $_SERVER['DOCUMENT_ROOT'] . $url;
        $finalUpload = $file->move($path , $name);
       return Gallery::create([
            'user_id' =>Auth::id(),
            'format' =>$format,
            'name' =>$name,
            'url' =>"$url/$name",
            'path' =>"$path/$name",
            'size' =>$finalUpload->getSize(),
        ]);
    }
    public function getGalleries(){
        return GalleryResource::collection(Gallery::with('user')->latest()->paginate(8))->resource;
    }
}
