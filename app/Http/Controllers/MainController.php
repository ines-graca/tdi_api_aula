<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function list()
    {
        $posts = Post::all();

        return view ('posts')
            ->with('posts',$posts);


    }


    public function  insert(Request $request){


        $this->validate($request, [
            'title' => 'required|unique:posts|string|max:255',
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image',
            'description' => 'required|string',
        ], [
            'title.required' =>'e necessario preencher o titulo'

        ]);

        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        Post::create($data);

        return redirect()->route('list');

    }

    public function form(){

        $users = User::all();
        return view('insert')->with('users', $users);

    }
}
