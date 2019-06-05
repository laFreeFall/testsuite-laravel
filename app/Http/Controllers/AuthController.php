<?php

namespace App\Http\Controllers;

use Illuminate\Http\{Request, Response};
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterFormRequest;
use App\User;
use JWTAuth;

class AuthController extends Controller
{
    /**
     * Creating an account for new User with given credentials
     *
     * @param RegisterFormRequest $request
     *
     * @return Response
     */
    public function register(RegisterFormRequest $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        return response([
            'status' => 'success',
            'data' => $user
        ], 200);
    }

    /**
     * Authenticating user by given credentials
     *
     * @param Request $request
     *
     * @return Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }

        return response([
            'status' => 'success'
        ])
            ->header('Authorization', $token)
            ->header('Access-Control-Expose-Headers', 'Authorization');
    }

    /**
     * Logging authenticated user out
     *
     * @return Response
     */
    public function logout()
    {
        JWTAuth::invalidate();

        return response([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }

    /**
     * Retrieving information about currently authenticated User
     *
     * @return Response
     */
    public function user()
    {
        $user = User::find(Auth::user()->id);

        return response([
            'status' => 'success',
            'data' => $user
        ]);
    }
}
