<?php

namespace App\Http\Controllers;

use App\Rendimento;
use Illuminate\Http\Request;

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
        //
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
     * @param  \App\Rendimento  $rendimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rendimento $rendimento)
    {
        //
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
