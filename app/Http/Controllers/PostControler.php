<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostControler extends Controller
{
    public function index(){

        $posts = [
            ["tile" => "post 1", "content" => "contenido del post 1"],
            ["tile" => "post 2", "content" => "contenido del post 2"],
            ["tile" => "post 3", "content" => "contenido del post 3"]
        ];

        $count = 10;

        return view('posts.index', compact("posts", "count"));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        return "aqui se guarda el post";
    }

    public function show($post){
        return view('posts.show', compact('post'));
        /*compact('post') es igual a array('post' => $post)*/
    }
    public function edit($post){
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $post){
        return "aqui se actualiza el post: $post";
    }
    public function destroy($post) {
        return "aqui se elimina el post: $post";
    }
}
