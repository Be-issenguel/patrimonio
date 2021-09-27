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
     * @param  \App\Poupanca  $poupanca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poupanca $poupanca)
    {
        //
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
}
