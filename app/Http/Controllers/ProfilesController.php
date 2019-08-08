<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.index',compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit',compact('user'));
    }
    
}
