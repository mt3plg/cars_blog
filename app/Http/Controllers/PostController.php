<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Відображення списку постів
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Відображення форми для створення нового поста
    public function create()
    {
        return view('posts.create');
    }

    // Збереження нового поста
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index');
    }

    // Відображення одного поста
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Відображення форми для редагування поста
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Оновлення поста
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->only(['title', 'content']));
        return redirect()->route('posts.index');
    }

    // Видалення поста
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
