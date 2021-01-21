<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $title = 'Kategoryalar';
        $categories = Category::all();
        return view('admin.category.index', compact('categories', 'title'));
    }

    public function form()
    {
        $title = "Kategorya qo'shish";
        return view('admin.category.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:categories,title'],
        ]);
        Category::create($request->all());
        return redirect(route('admin.category.index'));
    }

    public function edit(Category $category)
    {
        $title = "kategorya tahrirlash";
        return view('admin.category.edit', compact('category', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Category $category
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => ['required', 'unique:categories,title'],
        ]);
        $category->update($request->all());
        return redirect(route('admin.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Category $category): \Illuminate\Http\RedirectResponse
    {
        $category->delete();
        return redirect()->back();
    }
}
