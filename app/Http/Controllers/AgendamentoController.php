<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Agendamento;
class AgendamentoController extends Controller
{
    function create(Request $request){
        $request->validate([
            'nome'=>'required',
            'telefone'=>'required',
            'origem'=>'required',
            'data_do_Contato'=>'required',
            'observacao'=>'required'
        ]);
        $query = DB::table('servicos')->insert([
            'nome'=>$request->input('nome'),
            'telefone'=>$request->input('telefone'),
            'origem'=>$request->input('origem'),
            'data_do_Contato'=>$request->input('data_do_Contato'),
            'observacao'=>$request->input('observacao')
        ]);
        return redirect()->to('/');
    }

    public function listar()
    {
        $data = array(
            'listar' =>DB::table('servicos')->get()

        );
        return view('consultar', $data);
    }

    function excluir($id){
        $query = DB::table('servicos')
        ->where('id', $id)
        ->delete();
        if ($query) {
            return back()->with('success', 'Dados deletados com sucesso!');
        } else {
            return back()->with('fail', 'Algo deu errado!');
        }
    }

    function atualizar(Request $request){
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'origem' => 'required',
            'data_do_contato' => 'required',
            'observacao' => 'required',
        ]);
        $query = DB::table('servicos')
        ->where('id', $request->input('cid'))
        ->update([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'origem' => $request->input('origem'),
            'data_do_contato' => $request->input('data_do_contato'),
            'observacao' => $request->input('observacao'),
        ]);
        return redirect()->to('consultar');

        if ($query) {
            return back()->with('success', 'Dados atualizados com sucesso!');
        } else {
            return back()->with('fail', 'Algo deu errado!');
          
        }  
    }

    function editar($id){
        $row = DB::table('servicos')
        ->where('id', $id)
        ->first();
        $data = [
            'info' => $row,
            'Title'=>'Editanto'
        ];
        return view('editar', $data);
    }


}
