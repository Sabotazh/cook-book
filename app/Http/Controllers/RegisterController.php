<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;
use Illuminate\Routing\Redirector;

class RegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return View
     */
    public function show(): View
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function register(RegisterRequest $request): Redirector|RedirectResponse|Application
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Користувач успішно зареєстрований.");
    }
}
