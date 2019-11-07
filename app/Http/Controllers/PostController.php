<?php

namespace App\Http\Controllers;

use App\post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  return Post::all();
       $posts = Post::with('user')->get();

       $response = [

           'data' => $posts,
           'message' => 'Listagem de Posts',
           'result' => 'OK',

       ];

    return response($response, 200);

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

        $data = $request->all();


        $validator = Validator::make($data, [
            'title' => 'required|unique:posts|string|max:255',
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image',
            'description' => 'required|string',
            ], [
                'title.required' =>'e necessario preencher o titulo'

        ]);


        if ($validator->fails())
            return $validator->errors()->all();

        if($request->hasFile('image')) {
            $file = $request->file('image')->store('images');

            $data ['image'] = $file;

        }

        $post = Post::create($data);


        $response = [

            'data' => $post,
            'message' => 'Post criado',
            'result' => 'OK',

        ];
        return response($response);


        //
      /*  $post = Post::create(

            [

                'title' => $data['title'],
                'description' => $data['description'],
                'image' => $data['image'],
                'user_id' => $data['user_id']
            ]

        );*/

        return response($post, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {

        $data = $request->all();

        $validator = Validator::make($data, [
            'title' =>'unique:posts|string|max:255',
            'user_id' => 'exists:users,id',
            'image' => 'image',
            'description' => 'string',

        ],[
            'title.required'=>'é necessario preencher o titulo'

        ]);

        if($validator->fails())
            return $validator->errors()->all();

       if ($request->hasFile('image') ) {

           $file = $request->file('image')->store('images');

           $data['image'] = $file;


       }

        $response = [
            'data' => $post,
            'message' => 'Post Editado',
            'result'=> 'OK',
        ];

       return response($response);


    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {

        $post->delete();

        $response = [

            'data' => $post,
            'message' => 'Post Apagado',
            'result' => 'OK',

        ];
        return response($response);


        //
    }
}
