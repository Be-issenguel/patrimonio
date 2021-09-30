@extends('layouts.app')
@section('conteudo')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#modalCadastro" class="modal-cadastro fa fa-plus text-primary"></a>
            </div>

            <h2 class="panel-title">Lista de Poupanças</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Motivo</th>
                        <th>Valor Actual</th>
                        <th>Objetivo</th>
                        <th class="hidden-phone">Progresso</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($poupancas as $poupanca)
                        <tr class="gradeX">
                            <td>{{ $poupanca->motivo }}</td>
                            <td>{{ $poupanca->valor_atual }}</td>
                            <td>{{ $poupanca->valor_final }}</td>
                            <td>
                                <div
                                    class=" progress progress-sm
                                progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100"
                                        style="width:{{ ($poupanca->valor_atual * 100) / $poupanca->valor_final }}%;">
                                        {{ ($poupanca->valor_atual * 100) / $poupanca->valor_final }}%
                                    </div>
                                </div>
                            </td>
                            <td class="center">
                                @if ($poupanca->valor_atual >= $poupanca->valor_final)
                                    <span class="label label-success">finalizada</span>
                                @else
                                    <span class="label label-warning">em progresso</span>
                                @endif
                            </td>
                            <td>
                                <a href="#modalEditar" onclick="event.preventDefault(); editar({{ $poupanca }})"
                                    class="modal-editar text-primary"><i class=" fa fa-edit"></i></a>
                                <a href="" class="text-danger"><i class=" fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal Cadastro -->
        <div id="modalCadastro" class="modal-block mfp-hide">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Nova Poupança</h2>
                </header>
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <form action="{{ action('PoupancaController@store') }}" method="post" id="form-poupanca">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="motivo">Motivo</label>
                                            <input type="text" class="form-control" name="motivo" id="motivo"
                                                value="{{ old('motivo') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="valor_final">Valor a atingir</label>
                                            <input type="number" min="0" class="form-control" name="valor_final"
                                                id="valor_final">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary"
                                onclick="document.getElementById('form-poupanca').submit()">Cadastrar</button>
                            <button class="btn btn-default modal-dismiss">Cancelar</button>
                        </div>
                    </div>
                </footer>
            </section>
        </div>

        <!-- Modal Editar -->
        <div id="modalEditar" class="modal-block mfp-hide">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Editar Poupança</h2>
                </header>
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-text">
                            <form action="{{ action('PoupancaController@update') }}" method="post" id="form-poupanca">
                                @csrf
                                <input type="hidden" name="id" id="id">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="motivo1">Motivo</label>
                                            <input type="text" class="form-control" name="motivo" id="motivo1"
                                                value="{{ old('motivo') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="valor_final1">Valor a atingir</label>
                                            <input type="number" min="0" class="form-control" name="valor_final"
                                                id="valor_final1" value="{{ old('valor_final') }}">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary"
                                onclick="document.getElementById('form-poupanca').submit()">Cadastrar</button>
                            <button class="btn btn-default modal-dismiss">Cancelar</button>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
    </section>
@endsection
