<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Post;
use App\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(15);

        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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

        $request->validate([
            'title'=>'required|min:3|max:20',
            'content'=>'required|min:3|max:200',
            'author'=>'required',
        ],
        [
            'required' => "Non puoi aggiungere un Comic senza :attribute",
            'description.min' => 'CARATTERI INFERIORI AL MINIMO CONSENTITO',
            'description.required'=>'É OBBLIGATORIO',
        ],

        );

        $newPost = new Post();
        $newPost->title = $data["title"];
        $newPost->author = $data["author"];
        $newPost->image_url = $data["image_url"];
        $newPost->content = $data["content"];
        $newPost->slug = $data['title'];

        $newPost->save();


        return redirect()->route('admin.posts.show', $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        /* $user = User::findOrFail($post->user_id); */
        /* return view('admin.posts.show', ["post" => $post, "user" => $user]); */
        return view('admin.posts.show', ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request-> all();
        $post->title = $data['title'];
        $post->author = $data['author'];
        $post->image_url = $data['image_url'];
        $post->content = $data['content'];
        $post->save();

        return redirect()->route('admin.posts.show', $post)->with("message", "$post->title modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('deleted-message', "$post->title é stato delittato correttamente");
    }
}
