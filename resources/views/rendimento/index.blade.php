@extends('layouts.app')
@section('conteudo')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#modalCadastroRendimento" class="modal-cadastro-rendimento fa fa-plus text-primary"></a>
            </div>

            <h2 class="panel-title">Lista de Rendimentos</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Montante</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rendimentos as $rendimento)
                        <tr class="gradeX">
                            <td>{{ $rendimento->motivo }}</td>
                            <td>{{ $rendimento->montante }}</td>
                            <td>
                                <a href="#modalCreditar" onclick="event.preventDefault(); creditar({{ $rendimento }})"
                                    class="modal-creditar text-success"><i class=" fa fa-money"></i></a>
                                <a href="#modalEditar" onclick="event.preventDefault(); editar({{ $rendimento }})"
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
