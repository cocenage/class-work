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
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
            'text' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2048'
        ]);
        //здесь берем данные из всех текстовых полей
        $input = $request->all();
        // здксчь берем картинки из поле с name = image
        if ($image = $request ->file('image')) {
            $destionPath = 'images/';
            $profileImage = date('YmHis'). "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profileImage);
            $input['image'] = "$profileImage";
        }

        Post::create($input);

        return redirect()->route('post.index')->with('success', 'Ваша кошкадевочка довольна');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success','ваш кокшкопост удален');
    }
}
