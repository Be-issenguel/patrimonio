@extends('layouts.app')
@section('conteudo')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#modalCadastroDespesa" class="modal-cadastro-despesa fa fa-plus text-primary"></a>
            </div>

            <h2 class="panel-title">Lista de Despesas</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Designacao</th>
                        <th>Montante</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($despesas as $despesa)
                        <tr class="gradeX">
                            <td>{{ $despesa->designacao }}</td>
                            <td>{{ number_format($despesa->valor, 2, ',', '.') }}</td>
                            <td>{{ explode(' ', $despesa->created_at)[0] }}</td>
                            <td>
                                <a href="#modalEditarRendimento"
                                    onclick="event.preventDefault(); editarRendimento({{ $despesa }})"
                                    class="modal-editar-rendimento text-primary"><i class=" fa fa-edit"></i></a>
                                <a href="" class="text-danger"><i class=" fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
@endsection
