<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use DateTime;
use DateTimeZone;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $data = User::find(Auth::user()->id);

        $login_at = new DateTime('now', new DateTimeZone('Asia/Karachi'));
        $data->login_at = $login_at->format('Y-m-d H:i:s');
        $data->login_checked = '0';
        $data->save();

        return match ($request->user()->role) {
            0 => redirect()->intended('dashboard'),
            default => redirect()->intended(route('dashboard', absolute: false)),
        };
        // return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

        $data = User::find(Auth::user()->id);

        $logout_at = new DateTime('now', new DateTimeZone('Asia/Karachi'));
        $data->logout_at = $logout_at->format('Y-m-d H:i:s');
        $data->login_checked = '1';
        $data->save();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
