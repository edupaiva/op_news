<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\api\ApiMessages;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginJwtController extends Controller
{
    //Metodo para realizar o autenticacao e criar o token
    public function login(Request $request)
    {
        $credentials = $request->all(['email', 'password']) ;
        $v = Validator::make($credentials, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(!$token = auth('api')->attempt($credentials))
        {
            //$message = new ApiMessages('Unauthorized');
            return response()->json('Não autorizado', 401 );
        }
        return response()->json([
            'token' => $token
        ]);

    }
    
    //Método para adicionar o token na blacklist
    public function logout(){
        auth('api')->logout();
        return response()->json(['message' => 'Logout sucessfully!!']);
    }

    //Metodo para atualizar o token
    public function refresh()
    {
        $token = auth('api')->refresh();
        return response()->json([
            'token' => $token
        ]);
    }
}
