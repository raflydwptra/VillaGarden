<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:galleries.index|galleries.create|galleries.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->when(request()->q, function($galleries) {
            $galleries = $galleries->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'image'     => 'required|image',
            'type'      => 'required|in:INDOOR,OUTDOOR'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/galleries', $image->hashName());

        $gallery = Gallery::create([
            'name'      => $request->name,
            'image'     => $image->hashName(),
            'type'      => $request->type
        ]);

        if($gallery){
            //redirect dengan pesan sukses
            return redirect()->route('admin.gallery.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.gallery.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $image = Storage::disk('local')->delete('public/galleries/'.basename($gallery->image));
        $gallery->delete();

        if($gallery){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
