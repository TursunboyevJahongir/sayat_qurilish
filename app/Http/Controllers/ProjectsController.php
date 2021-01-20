<?php


namespace App\Http\Controllers;


use App\Models\Projects;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $projects = Projects::query()->paginate(6);
        return view('projects.index', compact('projects'));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Application|Factory|View
     */
    public function view(Request $request, int $id): Factory|View|Application
    {
        $project = Projects::query()->findOrFail($id);
        return view('projects.view', compact('project'));
    }
}
