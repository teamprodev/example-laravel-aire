<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Get all Posts
     *
     * @return View
     */
    final public function index() : View
    {
        $posts = Post::all();
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    final public function create() : View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return RedirectResponse
     */
    final public function store(StorePostRequest $request) : \Illuminate\Http\RedirectResponse
    {
        Post::create($request->validated());
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return View
     */
    final public function edit(Post $post) : View
    {
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    final public function update(Request $request,Post $post) : RedirectResponse
    {
        $post->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    final public function destroy(Post $post) : RedirectResponse
    {
        $post->delete();
        return redirect()->back();
    }
}
