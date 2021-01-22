<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Data;
use App\Models\Employer;
use App\Models\Message;
use App\Models\News;
use App\Models\Projects;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Projects::query()->latest()->limit(5)->get()->all();
        $categories = Category::query()->get()->all();
        $workers = Employer::query()->latest()->limit(6)->get()->all();
        $news = News::query()->latest()->limit(3)->get()->all();
        $slides = Slideshow::query()->latest()->limit(5)->get()->all();
        $data = Data::query()->get()->first();
        return view('welcome', compact('projects', 'categories', 'workers', 'news', 'slides', 'data'));
    }

    public function contacts(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'full_name' => 'required|max:125|min:2',
                'phone'  => 'required|max:13',
                'subject' => 'required|min:5|max:1024',
                'message' => 'required'
            ]);

            $message = new Message([
                'phone' => $request->input('phone'),
                'full_name' => $request->input('full_name'),
                'title' => $request->input('subject'),
                'message' => $request->input('message')
            ]);
            $message->save();
            return redirect('/contacts#fm')->with(['message' => 'Xabar yuborildi!']);
        }
        return view('contact');
    }

    public function about()
    {
        $data = Data::query()->get()->first();
        return view('about', compact('data'));
    }
}
