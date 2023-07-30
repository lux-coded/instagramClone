<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserProfilesController extends Controller

{
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('user.index', [
            'user' => $user,
        ]);
    }

    public function follow($id) {
        echo ($id);
    }

    public function guest()
    {
        $id = Auth::id();
        if (Auth::check()) {

            return redirect("/user/{$id}");
        }
        
        return view('auth.login');
    }
}
