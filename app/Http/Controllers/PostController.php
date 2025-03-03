<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::active()->get();

        $view_data = [
            'posts' => $posts,
        ];

        return view('index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create($fields);

        return redirect()->route('home')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        $comments = $post->comments()->get();
        $totalComment = $post->total_comment;

        return view('posts.show', [
            'post' => $post,
            'comments' => $comments,
            'total_comment' => $totalComment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fields = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('home')->with('error', 'Post not found!');
        }


        $post->update($fields);

        return redirect("/posts/$id")->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('home')->with('error', 'Post not found!');
        }

        $post->delete();
        return redirect('/')->with('success', 'Post deleted successfully!');
    }
}
