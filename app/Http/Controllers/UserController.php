<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::has('projects', '>=', 1)->get();

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
