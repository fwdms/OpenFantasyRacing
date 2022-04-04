<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function edit()
    {
        return Inertia::render('Profile/Edit');
    }

    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        $profileImage = Storage::put('/public/profile_images', $request->profile_image, 'public');
        $imageUrl = Storage::url($profileImage);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'country' => $request->country,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'about' => $request->about,
            'website' => $request->website,
            'cover_photo' => $request->cover_photo,
            'profile_image' => $imageUrl,
        ]);

        return Redirect::route('profile.edit');
    }
}
