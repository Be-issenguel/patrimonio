@extends('layouts.app')
@section('conteudo')
    <section class="panel">
        <header class="panel-heading">
            <h1>Total: {{ number_format($despesas->sum('valor'), 2, ',', '.') }} KZ</h1>
            <h2 class="panel-title">Despesas sobre o rendimento {{ $rendimento->tipo }} refente a data
                {{ $rendimento->mes }}</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Designação</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($despesas as $index => $despesa)
                        <tr class="gradeX">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $despesa->designacao }}</td>
                            <td>{{ number_format($despesa->valor, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
@endsection
