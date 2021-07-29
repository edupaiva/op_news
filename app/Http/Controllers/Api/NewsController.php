<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    private $news;
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    //Metodo para exibir todas as noticias 
    public function index(){
        //$news = $this->news->all();
        $news = auth('api')->user()->ownNews;

        return response()->json($news, 200);
    }

    //Metodo para Inserção da noticia no banco
    public function store(Request $request){
        $data = $request->all();

        try{
            $news = $this->news->create($data);

            return response()->json([
                'data' =>[
                    'msg' => 'Noticia cadastrada com sucesso!'
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['erro' => $e->getMessage()]);
        }
        
        
        
    }

        //Metodo para Atualização da noticia no banco
        public function update($id, Request $request){
            $data = $request->all();

            try{
                $news = $this->news->find($id);
                $news->update($data);
    
                return response()->json([
                    'data' =>[
                        'msg' => 'Noticia atualizada com sucesso!'
                    ]
                ]);
            }catch(\Exception $e){
                return response()->json(['erro' => $e->getMessage()]);
            }
        }

        //Metodo para deletar a noticia no banco
        public function destroy($id){
            

            try{
                $news = $this->news->find($id);
                $news->delete($id);
    
                return response()->json([
                    'data' =>[
                        'msg' => 'Noticia Excluido com sucesso!'
                    ]
                ]);
            }catch(\Exception $e){
                return response()->json(['erro' => $e->getMessage()]);
            }
        }

        //Metodo para exibir determinada noticia
        public function show($id){
            

            try{
                $news = $this->news->find($id);
                
    
                return response()->json([
                    'data' =>[
                        'msg' => 'Noticia encontrada com sucesso!',
                        'data' => $news,
                    ]
                ]);
            }catch(\Exception $e){
                return response()->json(['erro' => $e->getMessage()]);
            }
        }


}
