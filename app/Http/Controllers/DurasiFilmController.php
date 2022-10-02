<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\durasi_film;
use Illuminate\Http\Request;

class DurasiFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $durasis = durasi_film::orderBy('id', 'desc')->get();
        return view('admin.durasiFilm.index', compact('durasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.durasi.index);
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
        
       $validated = $request->validate([
            'durasi'=>'required|unique:durasi_film',
        ]);
        $durasis = new durasi_film();
        $durasis->durasi = $request->durasi;
        $durasis->save();
        Alert::success('Done','Data Berhasil Dibuat!')->autoClose(2000);
        return redirect()->route('durasi_film.index');
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
        $validate= $request->validate([
            'durasi'=>'required|',
        ]);
        $durasis = durasi_film::findOrFail($id);
        $durasis->durasi = $request->durasi;
        $durasis->save();
        Alert::success('Done','Data Berhasil Edit!');
        return redirect()->route('durasi_film.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $durasis = durasi_film::findOrFail($id);
        $durasis->delete();
        Alert::success('Done','Data Berhasil Dihapus!');
        return redirect()->route('durasi_film.index');
    }
}
