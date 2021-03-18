<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Laravel\Passport\Bridge\AccessToken;
use Laravel\Passport\Token;
use Laravel\Passport\PassportServiceProvider;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    /**
         * Instantiate a new controller instance.
         *
         * @return void
         
        public function __construct()
        {
            $this->middleware('auth.basic'); 
        }
        */
    public function login(Request $request) {
        
        $credentials = request(["username","password"]);
         
        if (Auth::attempt($credentials)){
            
            $user = Auth::user();
            $token = $user->createToken("Personal Access Token")->accessToken;

            return response()
                ->json([
                    "logged_in_user" => $user
                ], 200)
                ->cookie(
                    "sessionToken", //nome
                    $token,         //variabile
                    1440,           //durata
                    false,          //path  
                    false,          //domain    
                    false,          //secure
                    true            //httpOnly

                );
        }
        return response()->json([
            "error" => "invalid-credentials"
        ], 422);

    }

    public function logout (Request $request){ 
        $request->user()->token()->revoke();
        $cookie = Cookie::forget('sessionToken');
        return response()
            ->json([
                "message" => "logout_ok"
            ], 200)
            ->withCookie($cookie);
    }

    public function resetPassword (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required'
        ]);

        $user = User::where('email', $request->email)
            ->where('username', $request->username)
            ->first();
        if(!$user) {
            return response()->json([
                'message' => 'Utente non trovato',
                'status_code' => 401

            ], 401);
        } else {
            $user->password = Hash::make($request->newPassword);

            if($user->save()) {
                return response()->json([
                    'message' => "Password aggiornata",
                    'status_code' => 200
                ], 200);
            } else {
                return response()->json([
                    'message' => "  Errore nel salvataggio",
                    'status_code' => 500
                ], 500);
            }
        }
    }

   


        
    
}
