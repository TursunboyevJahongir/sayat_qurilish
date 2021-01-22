<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Projects;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $title = 'Proektlar';
        $projects = Projects::query()->latest()->paginate(10);
        return view('admin.project.index', compact('projects', 'title'));
    }

    public function form()
    {
        $title = "Kategorya qo'shish";
        return view('admin.project.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProjectRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function create(ProjectRequest $request)
    {
        $project = $request->validated();
        if ($request->file('image_url')) {
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $project['image_url'] = $filename;
//            Image::make('uploads/' . $project['image_url'])->fit(1000, 600)->save()->destroy();
        }
        $project['hidden'] = $request->hidden == 'on';
        Projects::create($project);
        return redirect(route('admin.project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Projects $project
     * @return Application|Factory|View|Response
     */
    public function edit(Projects $project)
    {
        $title = "Proektni tahrirlash";
        return view('admin.project.edit', compact('title', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectUpdateRequest $request
     * @param Projects $project
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(ProjectUpdateRequest $request, Projects $project)
    {
        if ($request->file('image_url')) {
            @unlink(public_path().'/uploads/' . $project->image_url);
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $project->image_url = $filename;
//            Image::make('uploads/' . $project->image_url)->fit(1000, 600)->save()->destroy();
        }
        $project->hidden = $request->hidden === 'on';
        $project->fill($request->except(['image_url', 'hidden']))->update();
        return redirect(route('admin.project.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Projects $project
     * @return RedirectResponse
     */
    public function destroy(Projects $project): \Illuminate\Http\RedirectResponse
    {
        @unlink(public_path().'/uploads/' . $project->image_url);
        $project->delete();
        return redirect()->back();
    }
}
