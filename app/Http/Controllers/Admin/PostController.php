<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request, Category $category)
    {
        $title = 'Elementlar';
        $posts = Posts::all();
        return view('admin.post.index', compact('posts', 'category', 'title'));
    }

    public function form(Category $category)
    {
        $title = "Element qo'shish";
        return view('admin.post.create', compact('title', 'category'));
    }

    public function create(PostRequest $request, $categoryId)
    {

        $all = array_merge($request->validated(), ['category_id' => $categoryId]);
        Posts::create($all);
        return redirect(route('post.index', ['category' => $categoryId]));
    }

    public function edit(Posts $post)
    {
        $title = "Element taxrirlash";
        return view('admin.post.edit', compact('post', 'title'));
    }

    public function update(PostUpdateRequest $request, Posts $post)
    {
        $post->update($request->validated());
        return redirect(route('post.index',['category'=>$post->category_id]));
    }


    public function destroy(Posts $post): \Illuminate\Http\RedirectResponse
    {
        $post->delete();
        return redirect()->back();
    }
}
