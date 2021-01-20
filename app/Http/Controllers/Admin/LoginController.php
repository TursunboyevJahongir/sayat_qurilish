<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index(Request $request)
    {
        if (!$request->isMethod('POST')) {
            return view('admin.login');
        }

        $request->validate([
            'login' => ['required', 'exists:users,login'],
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'login' => $request->post('login'),
            'password' => $request->post('password'),
        ], $request->post('remember'))) {
            return redirect('/admin');
        }

        return redirect(route('login'))->withErrors([
            'login' => __('auth.failed')
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect(route('home'));
    }

}
