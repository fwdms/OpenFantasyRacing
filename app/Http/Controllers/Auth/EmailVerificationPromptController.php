<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EmailVerificationPromptController extends Controller
{
    public function __invoke(Request $request): RedirectResponse|Response
    {
        if ($request->user()) {
            return $request->user()->hasVerifiedEmail()
                ? redirect()->intended(RouteServiceProvider::HOME)
                : Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
        }
        return Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
    }
}
