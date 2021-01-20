<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = Category::query()->get()->all();
        $items = Posts::query()->paginate(6);
        return view('catalog.index', compact('items', 'categories'));
    }

    public function category(Request $request, int $id)
    {
        Category::query()->findOrFail($id);
        $categories = Category::query()->get()->all();
        $items = Posts::query()->where(['category_id' => $id])->paginate(6);
        return view('catalog.category', compact('categories', 'items'));
    }

    public function view(Request $request, int $id)
    {
        $item = Posts::query()->findOrFail($id);
        $categories = Category::query()->get()->all();
        return view('catalog.view', compact('item', 'categories'));
    }
}
