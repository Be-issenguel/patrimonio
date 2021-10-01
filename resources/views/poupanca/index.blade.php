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
                                        style="width:{{ floor(($poupanca->valor_atual * 100) / $poupanca->valor_final) }}%;">
                                        {{ floor(($poupanca->valor_atual * 100) / $poupanca->valor_final) }}%
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
                                <a href="#modalCreditar" onclick="event.preventDefault(); creditar({{ $poupanca }})"
                                    class="modal-creditar text-success"><i class=" fa fa-money"></i></a>
                                <a href="#modalEditar" onclick="event.preventDefault(); editar({{ $poupanca }})"
                                    class="modal-editar text-primary"><i class=" fa fa-edit"></i></a>
                                <a href="" class="text-danger"><i class=" fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
@endsection
