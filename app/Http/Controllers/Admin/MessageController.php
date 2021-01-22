<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $messages = Message::query()->latest()->paginate(10);
        if ($request->search) {
            $messages = Message::query()->where(function ($query) use ($request) {
                $query->where('full_name', 'like', '%' . $request->search . '%')
                    ->orWhere('title', 'like', '%' . $request->search . '%')
                    ->orWhere('message', 'like', '%' . $request->search . '%')
                    ->orWhere('phone', 'like', '%' . $request->search . '%');
            })
                ->paginate(10);
        }
        $title = 'Xabarlar';

        return view('admin.messages.index', compact('messages', 'title'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function show(Message $message)
    {
        $title = 'Xabar';
        return view('admin.messages.show', compact('message', 'title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Message $message
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Message $message): \Illuminate\Http\RedirectResponse
    {
        $message->delete();
        return Redirect::route('admin.message.index');
    }
}
