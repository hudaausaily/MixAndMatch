<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use App\Models\LoginUser;

use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('publicUser.login');

    }
    public function LoginPost(LoginRequest $request): RedirectResponse
    {

        // $request->authenticate();
        $request->authenticate();

        $request->session()->regenerate();

         $email=$request->email;
        $password=$request->password;

        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            // $request->session()->regenerate();

            return redirect()->route('user.index');

        }
    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('user.index');
    }

}
