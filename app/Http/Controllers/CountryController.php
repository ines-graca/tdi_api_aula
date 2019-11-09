<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Country::all();

        $message = [

            'status' => '200',
            'message' => 'Operation Successful',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

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


        $result = Country::create($data);

        $message = [

            'status' => '201',
            'message' => 'New Country Created',
            'data' => $result


        ];

        return response($message, 201)
            ->header('Content-Type', 'application/json; charset=utf-8');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        $result = $country;

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
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $data = $request->only(['title']);


        $country->title = $data['title'];
        $country->save();


        $result = $country;

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
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();

        $result = 'Country Deleted';

        $message = [

            'status' => '200',
            'message' => 'Country Deleted',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }

}
