<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Employer;
use App\Models\News;
use App\Models\Projects;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Projects::query()->latest()->limit(5)->get()->all();
        $categories = Category::query()->get()->all();
        $workers = Employer::query()->latest()->limit(6)->get()->all();
        $news = News::query()->latest()->limit(3)->get()->all();
        return view('welcome', compact('projects', 'categories', 'workers', 'news'));
    }
}
