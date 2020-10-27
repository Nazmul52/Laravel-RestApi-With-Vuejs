<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class AuthController extends Controller
{
    /**
        * Create a new AuthController instance.
        *
        * @return void
        */
       public function __construct()
       {
           // $this->middleware('auth:api', ['except' => ['login', 'register']]);
           $this->middleware('JWT', ['except' => ['login', 'register']]);
       }

       /**
        * Get a JWT via given credentials.
        *
        * @return \Illuminate\Http\JsonResponse
        */
       public function login(Request $request)
       {    

            $validatedData = $request->validate([
              'email' => 'required|email',
              'password' => 'required'
            ]); 
           $credentials = request(['email', 'password']);

           if (! $token = auth()->attempt($credentials)) {
               return response()->json(['error' => 'Unauthorized'], 401);
           }

           return $this->respondWithToken($token);
       }

       /*After register get JWT token for login*/


       public function register(Request $request)
         {
             $validator = Validator::make($request->all(), [
                 'name' => 'required|between:2,100',
                 'email' => 'required|email|unique:users|max:50',
                 'password' => 'required|between:5,255|confirmed'
             ]);

             $user = User::create(array_merge(
                         $validator->validated(),
                         ['password' => bcrypt($request->password)]
                     ));

             // return response()->json([
             //     'message' => 'Successfully registered',
             //     'user' => $user
             // ], 201);

             return $this->login($request);
         }


       /**
        * Get the authenticated User.
        *
        * @return \Illuminate\Http\JsonResponse
        */
       public function me()
       {
           return response()->json(auth()->user());
       }

       /**
        * Log the user out (Invalidate the token).
        *
        * @return \Illuminate\Http\JsonResponse
        */
       public function logout()
       {
           auth()->logout();

           return response()->json(['message' => 'Successfully logged out']);
       }

       /**
        * Refresh a token.
        *
        * @return \Illuminate\Http\JsonResponse
        */
       public function refresh()
       {
           return $this->respondWithToken(auth()->refresh());
       }

       /**
        * Get the token array structure.
        *
        * @param  string $token
        *
        * @return \Illuminate\Http\JsonResponse
        */
       protected function respondWithToken($token)
       {
           return response()->json([
               'access_token' => $token,
               'token_type' => 'bearer',
               'expires_in' => auth()->factory()->getTTL() * 60,
               'name' => auth()->user()->name,
               'user_id' => auth()->user()->id,
               'email' => auth()->user()->email
           ]);
       }
}
