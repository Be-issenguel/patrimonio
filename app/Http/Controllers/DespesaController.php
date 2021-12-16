<?php

namespace App\Http\Controllers;

use App\Despesa;
use App\Poupanca;
use App\Rendimento;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despesas = Despesa::all();
        return view('despesa.index', compact('despesas'));
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
            'designacao' => 'required',
            'valor' => 'required',
            'rendimento_poupanca' => 'required',
        ]);

        $id = explode('.', $request->rendimento_poupanca)[1];

        $despesa = new Despesa();
        $despesa->designacao = $request->designacao;
        $despesa->valor = $request->valor;
        if (Str::startsWith($request->rendimento_poupanca, 'r')) {
            if (Rendimento::find($id)->montante > $request->valor) {
                $rendimento = Rendimento::find($id);
                $rendimento->montante -= $request->valor;
                $rendimento->save();
                $rendimento->despesas()->save($despesa);
            } else {
                session()->flash('msg_warning', 'Rendimento com montante insuficiente!');
                return back();
            }
        }

        if ($poupanca = Poupanca::find($id)->valor_atual > $request->valor) {
            $poupanca = Poupanca::find($id);
            if ($poupanca->valor_atual < $poupanca->valor_final) {
                session()->flash('msg_warning', 'Esta poupança ainda não atigiu o seu valor final!');
                return back();
            }
            $poupanca->valor_atual -= $request->valor;
            $poupanca->save();
            $poupanca->despesas()->save($despesa);
        } else {
            session()->flash('msg_warning', 'Poupanca com valor insuficiente!');
            return back();
        }

        session()->flash('msg_success', 'Despesa salva com sucesso!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function show(Despesa $despesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Despesa $despesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'despesa_id' => 'required',
            'designacao' => 'required',
            'valor' => 'required',
        ]);

        $despesa = Despesa::find($request->despesa_id);
        $despesa->designacao = $request->designacao;
        $despesa->valor = $request->valor;
        try {
            $despesa->save();
            session()->flash('msg_success', 'Despesa actualizada com sucesso!');
        } catch (\Throwable $th) {
            session()->flash('msg_success', 'Erro ao actualizar despesa!');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despesa $despesa)
    {
        //
    }
}
