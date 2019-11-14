<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\Director;
use App\Http\Requests\WebMovieStorageRequest;
use App\Http\Requests\WebUpdateRequest;
use App\Movie;
use Illuminate\Http\Request;

class WebMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

        /* index lista todos os resultados */

    {

        $result = Movie::with('director')->get();



        return view('movies')->with('movies', $result);

        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

        /* create para criar formulários(dar return) */

    {
        $categories = Category::all();
        $directors = Director::all();
        $countries = Country::all();
        return view('addmovie')->with('categories', $categories)->with('directors', $directors)->with('countries', $countries) ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebMovieStorageRequest $request)
    {

        $data = $request->all();

        $file = $request->file('image')->store('images/movies');
        $data['image'] = $file;

        Movie::create($data);

        return redirect()->route('web.movies.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('showmovie')->with('movie', $movie);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        /* mostrar o elemento */
$categories = Category::all();
$directors = Director::all();
$countries = Country::all();
        //
        return view('editmovies')->with('movie', $movie)
          ->with('categories', $categories)
            -> with('directors', $directors)
            -> with('countries', $countries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(WebUpdateRequest $request, Movie $movie)
    {
        /* sá update só a um movie) */

        $data = $request->all();



        if ($request->hasFile('image') ) {

            if($request->get('image') !== $movie['image']){

                $file = $request->file('image')->store('images');

                $data['image'] = $file;
            }


        }

        $movie->update($data);

        return redirect()->route('web.movies.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
