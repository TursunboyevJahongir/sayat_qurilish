<?php


namespace App\Http\Controllers;


use App\Models\Projects;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Projects::query()->latest()->limit(5)->get()->all();
        return view('welcome', compact('projects'));
    }
}
