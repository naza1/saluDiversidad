
<?php

$pacient = isset($pacient) ? $pacient : $data['pacient'];

if ($pacient) { ?>

<div class="">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Datos del paciente</div>

        <div class="panel-body">
          <div class="row">
            <div class="col-md-4"><label>Nombre y apellido:</label> {{ $pacient->name }}</div>
            <div class="col-md-4"><label>Fecha de nacimiento:</label> {{ $pacient->birth_date }}</div>
          </div>
          <div class="row">
            <div class="col-md-4"><label>D.N.I.:</label> {{ $pacient->dni }}</div>
            <div class="col-md-4"><label>Email:</label> {{ $pacient->email }}</div>
          </div>
          <div class="row">
            <div class="col-md-4"><label>Dirección:</label> {{ $pacient->address }}</div>
            <div class="col-md-4"><label>Tipo de cliente:</label> {{ config('constants.client_types')[$pacient->client->client_type_code] }}</div>
          </div>
          <div class="row">
            <div class="col-md-4"><label>Teléfono fijo:</label> {{ $pacient->telephone }}</div>
          </div>
          <div class="row">
            <div class="col-md-4"><label>Celular:</label> {{ $pacient->cellphone }}</div>
          </div>
          <div class="pacients-button-bar">
            <input type="hidden" id="pacient-id" value="{{ $pacient->id }}">
            @if ($pacient->client->client_type_code == 3)
              <a href="{{ action('SinisterController@index', ['pacient_id' => $pacient->id]) }}" class="pacient-detail-buttons btn-show-sinisters btn btn-sm btn-default">Siniestros</a>
              <a href="{{ action('EvolutionalController@index', ['pacient_id' => $pacient->id]) }}" class="pacient-detail-buttons btn-show-evolutionals hidden btn btn-sm btn-default">Evolutivos</a>
              <a href="{{ action('ShiftController@index', ['pacient_id' => $pacient->id]) }}" class="pacient-detail-buttons hidden btn-show-shifts btn btn-sm btn-default">Turnos</a>
              <a href="{{ action('AssistanceSheetController@index', ['pacient_id' => $pacient->id]) }}"  class="btn btn-sm btn-default">Planilla de asistencia</a>
            @else
              <a href="{{ action('EvolutionalController@index', ['pacient_id' => $pacient->id]) }}" class="btn btn-sm btn-default">Evolutivos</a>
              <a href="{{ action('ShiftController@index', ['pacient_id' => $pacient->id]) }}" class="btn btn-sm btn-default">Turnos</a>
              <a href="{{ action('AssistanceSheetController@index', ['pacient_id' => $pacient->id]) }}"  class="btn btn-sm btn-default">Planilla de asistencia</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
} ?>
