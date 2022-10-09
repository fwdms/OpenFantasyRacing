<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function edit(): Response
    {
        return Inertia::render('Profile/Edit');
    }

    public function update(ProfileRequest $request): RedirectResponse
    {
        $user = User::query()
            ->where('id', Auth::id())
            ->firstOrFail();

        $profileImage = Storage::put('/public/profile_images', $request->profile_image, 'public');

        /** @var string $profileImage */
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
            'profile_image' => Storage::url($profileImage),
        ]);

        return Redirect::route('profile.edit');
    }
}
