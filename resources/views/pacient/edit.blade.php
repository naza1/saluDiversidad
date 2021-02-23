@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editar paciente</div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    {!! Form::model($pacient, ['route' => ['admin.pacient.update', $pacient->id], 'method' => 'put']) !!}
                        @include('pacient.partials.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
