<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Typenews;

class TypenewsController extends Controller
{
    private $typenews;
    public function __construct(Typenews $typenews)
    {
        $this->typenews = $typenews;
    }

    //Metodo para exibir todos tipos de noticias 
    public function index(){
        $typenews = $this->typenews->all();
        return response()->json($typenews, 200);
    }

    //Metodo para Inserção do tipos de noticia
    public function store(Request $request){
        $data = $request->all();

        try{
            $typenews = $this->typenews->create($data);

            return response()->json([
                'data' =>[
                    'msg' => 'Tipo de Noticia cadastrada com sucesso!'
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['erro' => $e->getMessage()]);
        }
        
        
        
    }

        //Metodo para Atualização do tipos de noticias
        public function update($id, Request $request){
            $data = $request->all();

            try{
                $typenews = $this->typenews->find($id);
                $typenews->update($data);
    
                return response()->json([
                    'data' =>[
                        'msg' => 'Tipo de Noticia atualizada com sucesso!'
                    ]
                ]);
            }catch(\Exception $e){
                return response()->json(['erro' => $e->getMessage()]);
            }
        }

        //Metodo para deletar tipo de noticia no banco
        public function destroy($id){
            

            try{
                $typenews = $this->typenews->find($id);
                $typenews->delete($id);
    
                return response()->json([
                    'data' =>[
                        'msg' => 'Tipo de Noticia Excluido com sucesso!'
                    ]
                ]);
            }catch(\Exception $e){
                return response()->json(['erro' => $e->getMessage()]);
            }
        }

        //Metodo para exibir determinado tipo de noticia
        public function show($id){
            

            try{
                $typenews = $this->typenews->find($id);
                
    
                return response()->json([
                    'data' =>[
                        'msg' => 'Tipo de Noticia encontrada com sucesso!',
                        'data' => $typenews,
                    ]
                ]);
            }catch(\Exception $e){
                return response()->json(['erro' => $e->getMessage()]);
            }
        }

}
