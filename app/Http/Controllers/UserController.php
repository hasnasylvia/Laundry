<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Auth;
use DB;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    public function login(Request $req)
    {
        $credentials = $req->only('email', 'password');
        // try{
        //     if(! $token = JWTAuth::attempt($credentials)){
        //         return response()->json(['error' => 'invalid_credentials'], 400);
        //     }
        // }catch (JWTException $e){
        //     return response()->json(['error' => 'could_not_create_token'], 500);
        // }
        // return response()->json(compact('token'));
        if(Auth::attempt($credentials)){
            return redirect('/home');
        }else{
            return redirect('/tampil_login');
        }
    }

    public function tampilLogin(){
        return view('login.login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/tampil_login');
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create([
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'password' => Hash::make($req->get('password')),
            'role' => $req->get('role'),
        ]);
        // $token = JWTAuth::fromUser($user);
        // return response()->json(compact('user','token'), 201);
        return redirect('/tampil_login');
    }

    public function tampilRegister(){
        return view('login.register');
    }

    public function getAuthenticatedUser()
    {
        try{
            if(! $user = JWTAuth::parseToken()->authenticate()){
                return response()->json(['user_not_found'], 404);
            }
        }catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
            return response()->json(['token_expired'], $e->getStatusCode());
        }catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
            return response()->json(['token_invalid'], $e->getStatusCode());
        }catch (Tymon\JWTAuth\Exceptions\JWTException $e){
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }
}
