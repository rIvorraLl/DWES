<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a new resource
     *
     * @param StorePostRequest $request
     * @return void
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        $request->user()->posts()->create($validated);
        return redirect(route('posts.index'))->with('message', '¡Nuevo post!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     * Se encuentra comentada la opción para dar permisos
     * usando la función authorize()
     */
    public function update(Request $request, Post $post)
    {
        // $this->authorize('update', $post);
        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }

        $validated = $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $post->update($validated);

        return redirect(route('posts.index'))->with('message', '¡Post actualizado!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return redirect(route('posts.index'))->with('message', '¡Post eliminado!');
    }
}
