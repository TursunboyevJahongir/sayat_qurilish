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
        $news = News::query()->latest()->paginate(10);
        return view('admin.news.index', compact('news', 'title'));
    }

    public function form()
    {
        $title = "Yangilikl qo'shish";
        return view('admin.news.create', compact('title'));
    }

    public function create(NewsRequest $request)
    {
        $news = new News();
        if ($request->file('image_url')) {
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $news->image_url = $filename;
        }

        $news->fill($request->except('image_url'))->save();
        return redirect(route('admin.news.index'));
    }

    public function edit(News $news)
    {
        $title = "Yangilikni tahrirlash";
        return view('admin.news.edit', compact('news', 'title'));
    }

    public function update(NewsUpdateRequest $request, News $news)
    {
        if ($request->file('image_url')) {
            @unlink(public_path().'/uploads/'.$news->image_url);
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $news->image_url = $filename;
        }
        $news->fill($request->except('image_url'))->update();
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
