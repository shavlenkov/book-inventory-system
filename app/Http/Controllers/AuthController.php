<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninUserRequest;
use App\Http\Requests\SignupUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Show sign up page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function getSignup()
    {
        return view('auth.signup');
    }

    /**
     * Processing post request for sign up
     *
     * @param SignupUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSignup(SignupUserRequest $request)
    {
        $user = User::create($request->all());

        Auth::loginUsingId($user->id);

        return redirect()
            ->route('books.index')->with(['message' => 'You have successfully created an account']);
    }

    /**
     * Show sign in page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function getSignin() {
        return view('auth.signin');
    }

    /**
     * Processing post request for sign in
     *
     * @param SigninUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSignin(SigninUserRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()
                ->back();
        }

        return redirect()
            ->route('books.index')->with(['message' => 'You have successfully logged in account']);
    }

    /**
     * Processing get request for sign out
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getSignout()
    {
        Auth::logout();

        return redirect()
            ->route('get.signin');
    }
}
