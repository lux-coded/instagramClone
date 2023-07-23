<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserProfilesController extends Controller

{
    public function show($user): View
    {
        $user = User::findOrFail($user);
        return view('user', [
            'user' => $user,
        ]);
    }
}
