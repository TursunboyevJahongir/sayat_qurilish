<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Http\Requests\SlideUpdateRequest;
use App\Models\Slideshow;
use http\Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Slaydlar';
        $slides = Slideshow::query()->paginate(9);
        return view('admin.slide.index', compact('slides', 'title'));
    }
    public function form()
    {
        $title = "Ishchi qo'shish";
        return view('admin.slide.create', compact('title'));
    }

    public function create(SlideRequest $request)
    {
        $slide = $request->validated();
        $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
        $request->image_url->storeAs('', $filename);
        $slide['image_url'] = $filename;
        Image::make('uploads/' . $slide['image_url'])->fit(1000, 600)->save();
        Slideshow::create($slide);
        return redirect(route('admin.slide.index'));
    }

    public function edit(Slideshow $slide)
    {
        $title = "Ma'lumotlarini tahrirlash";
        return view('admin.slide.edit', compact('slide', 'title'));
    }

    public function update(SlideUpdateRequest $request, Slideshow $slide)
    {
        if ($request->file('image_url')) {
            @unlink(public_path().'/uploads/' . $slide->image_url);
            $filename = md5(microtime(true)) . '.' . $request->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('', $filename);
            $slide->image_url = $filename;
            Image::make('uploads/' . $slide->image_url)->fit(1000, 600)->save();
        }
        $slide->fill($request->except(['image_url']))->update();
        return redirect(route('admin.slide.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Slideshow $slide
     * @return RedirectResponse
     */
    public function destroy(Slideshow $slide): \Illuminate\Http\RedirectResponse
    {
        @unlink(public_path().'/uploads/' . $slide->image_url);
        $slide->delete();
        return redirect()->back();
    }
}
