<?php
// controllador para inicio de session con angularjs
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class InicioSession extends Controller{
	// 
    public function userAuth(Request $request){
    	// credenciales para la autentificacion de usuarios
    	$credentials = $request->only('email', 'password');
    	// %token guarda la credencial generada
    	$token = null;
    	try{
            $token = JWTAuth::attempt($credentials);
    		if (! $token) {
    			return Response()->json(['error' => $credentials], 401);
    		}
    	}catch(JWTException $ex){
    		// devolvemos un json con el error que ha ocurrido
    		return Response()->json(['error' => 'somthing_went_wrong'], 500);
    	}
        //devuelve datos de usuario y token de sesion
        $user = JWTAuth::toUser($token);
    	return Response()->json(compact('token', 'user'));
    }
}
