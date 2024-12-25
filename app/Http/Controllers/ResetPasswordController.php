<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.reset')->with([
            'token' => $token,
            'email' => $request->email,
        ]);
    }
}
