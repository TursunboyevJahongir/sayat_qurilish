<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Employer;
use App\Models\Message;
use App\Models\News;
use App\Models\Projects;
use App\Models\Slideshow;

class DashboardController extends Controller
{
    public function index()
    {
        $category_count = Category::all()->count();
        $project_count = Projects::all()->count();
        $news_count = News::all()->count();
        $slide_count = Slideshow::all()->count();
        $slides = Slideshow::query()->orderBy('created_at', 'desc')->limit(5)->get();
        $messages = Message::query()->orderBy('created_at', 'desc')->limit(6)->get();
        $employers= Employer::query()->orderBy('created_at', 'desc')->limit(8)->get();
        return view('admin.dashboard',
            compact('category_count', 'project_count', 'news_count', 'slide_count', 'slides', 'messages','employers'));
    }
}
