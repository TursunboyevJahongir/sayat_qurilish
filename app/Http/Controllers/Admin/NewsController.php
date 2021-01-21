<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use http\Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Yangiliklar';
        $news = News::all();
        return view('admin.news.index', compact('news', 'title'));
    }

    public function form()
    {
        $title = "Yangilikl qo'shish";
        return view('admin.news.create', compact('title'));
    }

    public function create(NewsRequest $request)
    {
        News::create($request->validated());
        return redirect(route('admin.news.index'));
    }

    public function edit(News $news)
    {
        $title = "Yangilikni tahrirlash";
        return view('admin.news.edit', compact('news', 'title'));
    }

    public function update(NewsUpdateRequest $request, News $news)
    {
        $news->update($request->validated());
        return redirect(route('admin.news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(News $news): \Illuminate\Http\RedirectResponse
    {
        $news->delete();
        return redirect()->back();
    }
}
