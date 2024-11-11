<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $post = Post::all(); */
        return view('post.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* $post = Post::all(); */
        return view('post.create', compact(''));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([]);
        /* $post = Post::create($data); */
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        /* $post = Post::all(); */
        return view('post.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([]);
        /* $post = Post::update($data); */
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index', $post->id);
    }
}
