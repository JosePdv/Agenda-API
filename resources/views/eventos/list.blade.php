@extends('portal.administrativo')

@section('content')

<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Administrativo</h2>
            <ol>
                <li><a href="{{ route('welcome') }}">Página Principal</a></li>
                <li>Lista de Eventos</li>
            </ol>
        </div>

    </div>
</section>

<section class="inner-page">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="table-responsive">

                    <table class="table table-striped table-hover" id="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Evento</th>
                                <th scope="col">Responsável</th>
                                <th scope="col">Data</th>
                                <th scope="col">Local</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventos as $item)
                            <tr>
                                <th scope="row">{{ $item->nome }}</th>
                                <th scope="row">{{ $item->responsavel }}</th>
                                <th scope="row">{{ $item->data }}</th>
                                <th scope="row">{{ $item->local }}</th>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @if ($item->status === 0)
                                        <a href="{{ route('eventos.delete', $item->id) }}" class="btn btn-danger">Desativar</a>
                                        @else
                                        <a href="{{ route('eventos.delete', $item->id) }}" class="btn btn-success">Ativar</a>
                                        @endif
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#view{{ $item->id }}">
                                            Vizulaizar
                                        </button>
                                        <a href="{{ route('eventos.form.edit', $item->id) }}"
                                            class="btn btn-warning">Editar</a>
                                    </div>
                                </td>
                            </tr>


                            <!-- Modal Vizualização de Dados -->
                            <div class="modal fade" id="view{{ $item->id }}" tabindex="-1"
                                aria-labelledby="view{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="view{{ $item->id }}Label">Evento
                                                {{ $item->nome }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                                <img src="{{ asset('/storage/'.$item->banner) }}" class="card-img-top"
                                                    alt="Evento">
                                                <div class="card-body">
                                                    <h5 class="card-title">Responsável: {{ $item->responsavel }}</h5>
                                                    <p class="card-text">{{ $item->descricao }}</p>
                                                    <p class="card-text">Data/Horario:{{ $item->data }} <==> Local:
                                                            {{ $item->local }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal -->

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">{{ $eventos->links() }}</td>
                            </tr>
                            <tr>
                                <td colspan="5"><a href="{{ route('eventos.form.create') }}"
                                        class="btn btn-info container-fluid">Adicionar</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection