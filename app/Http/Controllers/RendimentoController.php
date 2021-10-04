<?php

namespace App\Http\Controllers;

use App\Rendimento;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class RendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rendimentos = Rendimento::all();
        return view('rendimento.index', compact('rendimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'valor' => 'required|min:2',
            'mes' => 'required',
        ]);

        $rendimento = new Rendimento();
        $rendimento->tipo = $request->tipo;
        $rendimento->montante = $request->valor;
        $rendimento->mes = $request->mes;
        try {
            $rendimento->save();
            session()->flash('msg_success', 'Rendimento salvo com sucesso!');
        } catch (\Throwable $th) {
            session()->flash('msg_error', 'Erro: ' . $th);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rendimento  $rendimento
     * @return \Illuminate\Http\Response
     */
    public function show(Rendimento $rendimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rendimento  $rendimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Rendimento $rendimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'rendimento_id' => 'required',
            'tipo' => 'required',
            'mes' => 'required',
            'valor' => 'required|min:2',
        ]);

        $rendimento = Rendimento::find($request->rendimento_id);

        $rendimento->tipo = $request->tipo;
        $rendimento->montante = $request->valor;
        $rendimento->mes = $request->mes;
        try {
            $rendimento->save();
            session()->flash('msg_success', 'Rendimento actualizado com sucesso!');
        } catch (\Throwable $th) {
            session()->flash('msg_error', 'Erro: ' . $th);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rendimento  $rendimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rendimento $rendimento)
    {
        //
    }
}
