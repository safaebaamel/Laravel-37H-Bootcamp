<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MainController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function check(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:12',
        ]);
        $userInfo = User::where('email','=', $request->email)->first();
        if (!$userInfo) {
            return back()->with('message', 'we don not recognize your email');
        } else {
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('loggedUser', $userInfo->id);
                $request->session()->put('id', $userInfo->id);
                $request->session()->put('firstname', $userInfo->firstname);
                return redirect('admin/dashboard');
            } else {
            return back()->with('message', 'we don not recognize your password');
            }
        }
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function logout() {
        if(session()->has('loggedUser')) {
            session()->pull('loggedUser');
            return redirect('/auth/login');
        } else {
            dd(session('loggedUser'));
        }
    }
}
