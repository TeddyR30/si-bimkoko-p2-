<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    public function edit()
    {
        return view('user.edit', ['user' => Auth::user()]);
    }

    // public function update(Request $request)
    // {
    //     $user = Auth::user();
    //     $user->update($request->all());

    //     return redirect()->route('user.profile');
    // }

    // public function destroy()
    // {
    //     $user = Auth::user();
    //     $user->delete();

    //     return redirect()->route('logins');
    // }
}
