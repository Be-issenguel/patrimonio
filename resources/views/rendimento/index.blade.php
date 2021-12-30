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
                        <th>Montante Inicial</th>
                        <th>Mês</th>
                        <th>Movimentos</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rendimentos as $rendimento)
                        <tr class="gradeX">
                            <td>{{ $rendimento->tipo }}</td>
                            <td>{{ number_format($rendimento->montante, 2, ',', '.') }}</td>
                            <td>{{ number_format($rendimento->montante_inicial, 2, ',', '.') }}</td>
                            <td>{{ $rendimento->mes }}</td>
                            <td>{{ $rendimento->despesas->count() }}</td>
                            <td>
                                <a href="#modalEditarRendimento"
                                    onclick="event.preventDefault(); editarRendimento({{ $rendimento }})"
                                    class="modal-editar-rendimento text-primary"><i class=" fa fa-edit"></i></a>
                                <a href="" class="text-danger"><i class=" fa fa-trash-alt"></i></a>
                                <a href="{{ action('RendimentoController@despesas', ['id' => $rendimento->id]) }}"
                                    class="text-success"><i class=" fa fa-external-link-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
@endsection
