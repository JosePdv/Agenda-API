<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();

        $evento = new Evento([
            'nome' => $data['nome'],
            'local' => $data['local'],
            'banner' => 'vazio',
            'descricao' => $data['descricao'],
            'data' => $data['data'],
            'url' => $data['url'],
            'mapa' => $data['mapa'],
            'responsavel' => $data['responsavel']
        ]);

        if(!empty($request->file('banner'))){
            $nome = $request->file('banner')->getClientOriginalName();
            $evento->banner = $request->file('banner')->storeAs('anexos', $nome); 
        }else{
            return redirect()->back()->with('message', 'O Campo BANNER Não Pode Ser Vazio');
        }

        $evento->save();

        return redirect()->back()->with('sucesso', 'Evento '.$evento->nome.' Foi Cadastrado Com Sucesso');

    }

    public function delete($id)
    {
        $evento = Evento::where('id', $id)->first();

        if($evento->status === 0){
            $evento->status = 1; 
        }else{
            $evento->status = 0;
        }

        $evento->save();

        return redirect()->back();
    }

    public function update(Request $request){
        $data = $request->all();

        $evento = Evento::where('id', $data['id'])->first();

        $evento->nome = $data['nome'];
        $evento->local = $data['local'];
        $evento->descricao = $data['descricao'];
        $evento->data = $data['data'];
        $evento->url = $data['url'];
        $evento->mapa = $data['mapa'];
        $evento->responsavel = $data['responsavel'];
        
        if(!empty($request->file('banner'))){

            Storage::delete($evento->banner);

            $name = $request->file('banner')->getClientOriginalName();
            $evento->banner = $request->file('banner')->storeAs('anexos', $name);

        }

        $evento->save();

        return redirect()->back()->with('sucesso', 'Evento '.$evento->nome.' Foi Editado Com Sucesso');
    }

    // API

    public function getEventosJson(){

        $eventos = Evento::where('status', 0)->orderBy('data', 'desc')->get();

        return response()->json($eventos);
    }

    public function getEventoJson($id){

        $evento = Evento::where('id', $id)->first();

        return response()->json($evento);
    }

    public function getEventosImagemJson($id){

        $eventos = Evento::where('id', $id)->first();      

        return Storage::response($eventos->banner);
    }

    // FIM API
}
