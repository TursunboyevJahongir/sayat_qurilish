<?php


namespace App\Http\Controllers;


use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::query()->paginate(6);
        return view('projects.index', compact('projects'));
    }

    public function view(Request $request, int $id)
    {

    }
}
