<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    private $user;
    public function __construct(user $user)
    {
        $this->user = $user;
    }

    
    //Metodo para cadastrar usuarios
    public function create(Request $request){
        $data = $request->all();

        try{
            $user = $this->user->create($data);

            return response()->json([
                'data' =>[
                    'msg' => 'Usuário cadastrado com sucesso!'
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['erro' => $e->getMessage()]);
        }
        
        
        
    }

    //Metodo para realizar o login
    public function login(Request $request){
        $data = $request->all();

        try{
            

            return response()->json([
                'data' =>[
                    'msg' => 'Usuário logado com sucesso!'
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['erro' => $e->getMessage()]);
        }
        
        
        
    }

    //Metodo para exibir determinado usuário]
    public function show($id){
            

        try{
            $user = $this->user->find($id);
            

            return response()->json([
                'data' =>[
                    'msg' => 'Dados do usuário!',
                    'data' => $user,
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['erro' => $e->getMessage()]);
        }
    }


}
