<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function index(Request $request, Category $category)
    {
        $title = 'Elementlar';
        $posts = Posts::where('category_id',$category->id)->get();
        return view('admin.post.index', compact('posts', 'category', 'title'));
    }

    public function form(Category $category)
    {
        $title = "Element qo'shish";
        return view('admin.post.create', compact('title', 'category'));
    }

    public function create(PostRequest $request, $categoryId)
    {
        $post = $request->validated();
        if ($request->file('image_url')) {
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $post['image_url'] = $filename;
            Image::make('uploads/' . $post['image_url'])->fit(1000, 600)->save();
        }
        $post['category_id'] = $categoryId;
        Posts::create($post);
        return redirect(route('admin.post.index', ['category' => $categoryId]));
    }

    public function edit(Posts $post)
    {
        $title = "Element taxrirlash";
        return view('admin.post.edit', compact('post', 'title'));
    }

    public function update(PostUpdateRequest $request, Posts $post)
    {
        if ($request->file('image_url')) {
            @unlink('uploads/' . $post->image_url);
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $post->image_url = $filename;
            Image::make('uploads/' . $post->image_url)->fit(1000, 600)->save();
        }
        $post->fill($request->except(['image_url', 'hidden']))->update();
        return redirect(route('admin.post.index', ['category' => $post->category_id]));
    }


    public function destroy(Posts $post): \Illuminate\Http\RedirectResponse
    {
        $post->delete();
        return redirect()->back();
    }
}
