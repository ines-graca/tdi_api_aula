<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;

/**
 * @group DirectorManagement
 */

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Director::all();

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

        $data = $request->only(['title']);


        $result = Director::create($data);

        $message = [

            'status' => '201',
            'message' => 'New Category Created',
            'data' => $result


        ];

        return response($message, 201)
            ->header('Content-Type', 'application/json; charset=utf-8');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        $result = $director;

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
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {

        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $data = $request->only(['title']);


        $director->title = $data['title'];
        $director->save();


        $result = $director;

        $message = [

            'status' => '200',
            'message' => 'Saved Director',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $director->delete();

        $result = 'Director deleted';

        $message = [

            'status' => '200',
            'message' => 'Director Deleted',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }
}
