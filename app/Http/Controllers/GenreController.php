<?php

namespace App\Http\Controllers;

use App\Models\genre_film;
use Illuminate\Http\Request;
use Alert;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $genres = genre_film::orderBy('id', 'desc')->get();
        return view('admin.genre.index', compact('genres'));
    }                   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.genre.index);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        
       $validated=$request->validate([
            'kategori'=>'required|unique:genre_film',
        ]);
        $genres = new genre_film();
        $genres->kategori = $request->kategori;
        $genres->save();
        Alert::success('Done','Data Berhasil Dibuat!');
        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated=$request->validate([
            'kategori'=>'required|unique:genre_film',
        ]);
        $genres = genre_film::findOrFail($id);
        $genres->kategori = $request->kategori;
        $genres->save();
        Alert::success('Done','Data Berhasil Dibuat!');
        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!genre_film::destroy($id))
        return redirect()->back();
        // $genres = genre_film::findOrFail($id);
        // $genres->delete();
       
      
        // return redirect()->route('genre.index');
    }
}





