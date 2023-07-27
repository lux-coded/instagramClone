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
        // dd($user->profile);
        return view('user.index', [
            'user' => $user,
        ]);
    }

    public function guest(): View
    {
        $id = Auth::id();
        return view('welcome', [
            'id' => $id,
        ]);
    }
}
