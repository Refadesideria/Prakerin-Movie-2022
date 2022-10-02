<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $movies = Movie::All();
        return view('frontend.home.index', compact('movies'));
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function film()
    {
        $movies = Movie::All();
        return view('frontend.film.index', compact('movies'));
    }

    public function kontak()
    {
        return view('frontend.kontak.index');
    }

    
}
