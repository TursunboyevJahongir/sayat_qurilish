<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function confirm(Request $request){
        if (!$request->isMethod('POST')) {
            return view('admin.settings.confirmation_login');
        }

        $request->validate([
            'login' => ['required', 'exists:users,login'],
            'password' => 'required'
        ]);

        if (\Auth::attempt([
            'login' => $request->post('login'),
            'password' => $request->post('password'),
        ])) {
            $admin  =Auth::user();
            return view('admin.settings.update_login', compact('admin'));
        }

        return redirect(route('admin.confirm'))->withErrors([
            'login' => __('auth.failed')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(AdminRequest $request)
    {
        $id = Auth::id();
        $user = User::find($id);
        $all = $request->validated();

        $all['password'] = bcrypt($all['password']);
        $user->update($all);
        return redirect()->route('dashboard');
    }
}
