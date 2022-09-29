@extends('portal.administrativo')

@section('content')

<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Administrativo</h2>
            <ol>
                <li><a href="{{ route('welcome') }}">Página Principal</a></li>
                <li>Cadastro de Eventos</li>
            </ol>
        </div>

    </div>
</section>

<section class="inner-page">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    @if(session('message'))
                    <div class="card-header alert alert-danger">
                        <p>{{ session('message') }}</p>
                    </div>
                    @endif

                    @if (session('sucesso'))
                    <div class="card-header alert alert-success">
                        <p>{{ session('sucesso') }}</p>
                    </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ route('eventos.create') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="responsavel"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Responsável(eis) pelo o Evento') }}</label>

                                <div class="col-md-6">
                                    <input id="responsavel" type="text"
                                        class="form-control @error('responsavel') is-invalid @enderror"
                                        name="responsavel" value="{{ old('responsavel') }}" required
                                        autocomplete="responsavel" autofocus>

                                    @error('responsavel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nome"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text"
                                        class="form-control @error('nome') is-invalid @enderror" name="nome"
                                        value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                    @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="local"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Local') }}</label>

                                <div class="col-md-6">
                                    <input id="local" type="text"
                                        class="form-control @error('local') is-invalid @enderror" name="local"
                                        value="{{ old('local') }}" required autocomplete="local" autofocus>

                                    @error('local')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="banner"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Banner') }}</label>

                                <div class="col-md-6">
                                    <input id="banner" type="file"
                                        class="form-control @error('banner') is-invalid @enderror" name="banner"
                                        required autofocus>

                                    @error('banner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descricao"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control"  class="form-control @error('descricao') is-invalid @enderror" name="descricao" rows=5 required autocomplete="descricao" autofocus>{{ old('descricao') }}</textarea>

                                    @error('descricao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

                                <div class="col-md-6">
                                    <input id="url" type="text" placeholder="Opcional, caso o evento seja uma LIVE"
                                        class="form-control @error('url') is-invalid @enderror" name="url"
                                        value="{{ old('url') }}" autocomplete="url" autofocus>

                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mapa" class="col-md-4 col-form-label text-md-right">{{ __('Link Google') }}</label>

                                <div class="col-md-6">
                                    <input id="mapa" type="text" placeholder="Opcional, caso o evento seja uma LIVE"
                                        class="form-control @error('mapa') is-invalid @enderror" name="mapa"
                                        value="{{ old('mapa') }}" autocomplete="mapa" autofocus>

                                    @error('mapa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                                <div class="col-md-6">
                                    <input id="data" type="datetime-local" class="@error('data') is-invalid @enderror"
                                        name="data" value="{{ old('data') }}" required autocomplete="data" autofocus>

                                    @error('data')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection