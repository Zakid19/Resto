<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
        // return response()->json(['message' => 'Anda harus login terlebih dahulu']);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();


        if (auth()->user()->role_id == '1') {
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        //* Api

        // $user = User::where('email', $request->email)->firstOrFail();
        // $token = $user->createToken('myapptoken')->plainTextToken;

        // return response()->json([
        //     'message' => 'Login success',
        //     'access_token' => $token,
        //     'token_type' => 'Bearer'
        // ]);


    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

        // Api
        // Auth::user()->tokens()->delete();
        // $response = ['message' => 'You have been successfully logged out!'];
        // return response($response, 200);
    }
}
