<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostControler extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        return "aqui se guarda el post";
    }

    public function show($post){
        return view('posts.show');
    }

    public function edit($post){
        return view('posts.edit');
    }
    public function update(Request $request, $post){
        return "aqui se actualiza el post: $post";
    }
    public function destroy($post) {
        return "aqui se elimina el post: $post";
    }
}
