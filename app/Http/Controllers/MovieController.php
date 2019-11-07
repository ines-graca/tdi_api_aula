<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = Movie::with('director')->get();

        $message = [

            'status' => '200',
            'message' => 'Operation Successful',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $data = $request->only(['title','year', 'image','rating', 'category_id', 'country_id', 'director_id']);
        $path = $request->file('image')->store('movieImages');
        $data['image'] = $path;


        $result = Movie::create($data);

        $message = [

            'status' => '201',
            'message' => 'New Movie Created',
            'data' => $result


        ];

        return response($message, 201)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $result = Movie::with('director')->find($movie->id);

        $message = [

            'status' => '200',
            'message' => 'Success, take it',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $data = $request->only(['title','year', 'image','rating', 'category_id', 'country_id', 'director_id']);
        $path = $request->file('image')->store('movieImages');
        $data['image'] = $path;


        $movie->title = $data['title'];
        $movie->title = $data['year'];
        $movie->title = $data['image'];
        $movie->title = $data['rating'];
        $movie->title = $data['category_id'];
        $movie->title = $data['country_id'];
        $movie->title = $data['director_id'];
        $movie->save();


        $result = $movie;

        $message = [

            'status' => '200',
            'message' => 'Saved Successfully',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $movie->delete();

        $result = 'Movie Deleted';

        $message = [

            'status' => '200',
            'message' => 'Movie Deleted',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }
}
