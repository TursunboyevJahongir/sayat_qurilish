<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Elementlar';
        $posts = Posts::all();
        return view('admin.post.index', compact('posts', 'title'));
    }

    public function form()
    {
        $title = "Element qo'shish";
        return view('admin.post.create', compact('title'));
    }

    public function create(PostRequest $request)
    {
        Posts::create($request->validated());
        return redirect(route('posts'));
    }

    public function edit(Posts $post)
    {
        $title = "Element taxrirlash";
        return view('admin.post.edit', compact('post', 'title'));
    }

    public function update(PostUpdateRequest $request, Posts $posts)
    {
        $posts->update($request->validated());
        return redirect(route('posts'));
    }


    public function destroy(Posts $post): \Illuminate\Http\RedirectResponse
    {
        $post->delete();
        return redirect()->back();
    }
}
