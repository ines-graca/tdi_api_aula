<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


/**
 * @group CategoryManagement
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Category::all();

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


        $result = Category::create($data);

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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $result = $category;

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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $data = $request->only(['title']);


        $category->title = $data['title'];
        $category->save();


        $result = $category;

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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

        $category->delete();

        $result = 'Category Deleted';

        $message = [

            'status' => '200',
            'message' => 'Category Deleted',
            'data' => $result


        ];

        return response($message, 200)
            ->header('Content-Type', 'application/json; charset=utf-8');

    }
}
