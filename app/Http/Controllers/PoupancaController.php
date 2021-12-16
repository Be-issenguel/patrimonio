<?php

namespace App\Http\Controllers;

use App\Http\Requests\PoupancaRequest;
use App\Poupanca;
use Illuminate\Http\Request;

class PoupancaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poupancas = Poupanca::all();
        return view('poupanca.index', compact('poupancas'));
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
     * @param  \App\Http\Requests\PoupancaRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoupancaRequest $request)
    {
        $poupanca = new Poupanca();
        $poupanca->motivo = $request->motivo;
        $poupanca->valor_final = $request->valor_final;
        if ($poupanca->save()) {
            session()->flash('msg_success', 'Poupanca ' . $poupanca->motivo . ' cadastrada');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poupanca  $poupanca
     * @return \Illuminate\Http\Response
     */
    public function show(Poupanca $poupanca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poupanca  $poupanca
     * @return \Illuminate\Http\Response
     */
    public function edit(Poupanca $poupanca)
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
        if (Poupanca::where(['motivo' => $request->motivo, ['id', '!=', $request->id]])->count()) {
            session()->flash('msg_error', 'Já existe poupança com este motivo');
            return back();
        }

        $poupanca = Poupanca::find($request->id);
        if ($poupanca->valor_atual > $request->valor_final) {
            session()->flash('msg_error', 'O valor final não pode ser inferior ao inicial');
            return back();
        }
        $poupanca->motivo = $request->motivo;
        $poupanca->valor_final = $request->valor_final;
        if ($poupanca->valor_final > $poupanca->valor_atual) {
            $poupanca->status = 'progresso';
        }
        $poupanca->save();
        session()->flash('msg_success', 'Poupanca ' . $poupanca->motivo . ' actualizada');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poupanca  $poupanca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poupanca $poupanca)
    {
        //
    }

    /**
     * Creditar poupança.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function creditar(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'valor' => 'required'
        ]);

        $poupanca = Poupanca::find($request->id);
        if ($poupanca->valor_atual + $request->valor > $poupanca->valor_final) {
            session()->flash('msg_error', 'O valor atual não pode superar o objectivo');
            return back();
        }

        $poupanca->valor_atual += $request->valor;
        if ($poupanca->valor_final == $poupanca->valor_atual) {
            $poupanca->status = 'finalizada';
        }
        $poupanca->save();
        session()->flash('msg_success', 'Creditado ' . $request->valor . ' à poupança ' . $poupanca->motivo);
        return back();
    }
}
