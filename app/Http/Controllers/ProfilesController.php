<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['required', 'image'],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        $attributes['avatar'] = request('avatar')->store('avatars');
        $attributes['password'] = Hash::make(request('password'));

        $user->update($attributes);
        return redirect($user->path());
    }
}
