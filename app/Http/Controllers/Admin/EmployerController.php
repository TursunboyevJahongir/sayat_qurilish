<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployerRequest;
use App\Http\Requests\EmployerUpdateRequest;
use App\Models\Employer;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EmployerController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Xodimlar';
        $employers = Employer::query()->latest()->paginate(10);
        return view('admin.employer.index', compact('employers', 'title'));
    }

    public function form()
    {
        $title = "Ishchi qo'shish";
        return view('admin.employer.create', compact('title'));
    }

    public function create(EmployerRequest $request)
    {
        $employer = $request->validated();
        $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
        $request->image_url->storeAs('', $filename);
        $employer['image_url'] = $filename;
        Image::make('uploads/' . $employer['image_url'])->fit(480, 640)->save();
        Employer::create($employer);
        return redirect(route('admin.employer.index'));
    }

    public function edit(Employer $employer)
    {
        $title = "Xodim ma'lumotlarini tahrirlash";
        return view('admin.employer.edit', compact('employer', 'title'));
    }

    public function update(EmployerUpdateRequest $request, Employer $employer)
    {
        if ($request->file('image_url')) {
            @unlink('uploads/' . $employer->image_url);
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $employer->image_url = $filename;
            Image::make('uploads/' . $employer->image_url)->fit(480,640)->save();
        }
        $employer->fill($request->except(['image_url']))->update();
        return redirect(route('admin.employer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employer $employer
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Employer $employer): \Illuminate\Http\RedirectResponse
    {
        @unlink('uploads/' . $employer->image_url);
        $employer->delete();
        return redirect()->back();
    }
}
