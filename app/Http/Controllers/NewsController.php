<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->latest()->paginate(6);
        return view('news.index', compact('news'));
    }

    public function view(Request $request, int $id)
    {
        $news = News::query()->findOrFail($id);
        return view('news.view', compact('news'));
    }
}
