<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('user.profile', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $data = request()->validate([
            'description' => '',
            'url' => '',
            'image' => '',
        ]);

        $user->profile->update($data);

        return redirect('/users/{$user->id}');
    }
}
