@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>Bienvenido</p>
                   <a href="{{ action('App\Http\Controllers\PacienteController@showPaciente', ['id' => session('paciente')]) }}" class="btn btn-xs btn-danger btn-delete">Editar tus datos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
