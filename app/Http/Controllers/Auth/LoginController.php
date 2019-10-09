<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        $user = User::where([
            'email' => $request->email
        ])->first();

        if ($user) {

            if (empty($user->salt)) {
                $salted = $request->password;
            } else {
                $salted = $request->password.'{'.$user->salt.'}';
            }

            $digest = hash('sha512', $salted, true);
            for ($i = 1; $i < 5000; ++$i) {
                $digest = hash('sha512', $digest.$salted, true);
            }

            $encoded = base64_encode($digest);
            if (hash_equals($encoded, $user->password)) {
                $this->guard()->login($user, false);

                return true;
            }
        }

        return false;
    }

}
