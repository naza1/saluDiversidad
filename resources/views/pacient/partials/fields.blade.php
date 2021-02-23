@if (Auth::user()->is_admin)
<div class="form-group">
  <label for="client_type">Tipo de cliente</label>
  {{ Form::select('client_type', $client_types, isset($pacient->client_type_code) ? $pacient->client_type_code : null, ['class' => 'form-control', 'id' => 'client_type']) }}
</div>
<div class="form-group">
  <label for="client_id">Nombre de cliente</label>
  {{ Form::select('client_id', [], null, ['class' => 'form-control', 'id' => 'client_id']) }}
  <input type="hidden" id="selected_client_id" value="{{ $pacient->client_id or null }}">
</div>
<div class="form-group">
  <label for="member_number">N° de afiliado</label>
  {{ Form::text('member_number', null, ['class' => 'form-control', 'id' => 'member_number']) }}
</div>
@endif
<div class="form-group">
  <label for="name">Nombre del paciente</label>
  {{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'id' => 'name']) }}
</div>
<div class="form-group">
  <label for="agreement">Convenio</label>
  {{ Form::text('agreement', null, ['class' => 'form-control', 'id' => 'agreement']) }}
</div>
<div class="form-group">
  <label for="dni">D.N.I.</label>
  {{ Form::text('dni', null, ['class' => 'form-control', 'required' => '']) }}
</div>
<div class="form-group">
  <label for="date">Fecha de nacimiento</label>
  <div class="datepicker input-group">
    {{ Form::text('birth_date', null, ['class' => 'form-control', 'required' => '']) }}
    <span class="input-group-addon">
      <span class="glyphicon glyphicon-calendar"></span>
    </span>
  </div>
</div>
<div class="form-group">
  <label for="address">Dirección</label>
  {{ Form::text('address', null, ['class' => 'form-control', 'required' => '']) }}
</div>
<div class="form-group">
  <label for="telephone">Teléfono</label>
  {{ Form::text('telephone', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  <label for="cellphone">Celular</label>
  {{ Form::text('cellphone', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  <label for="email">Email</label>
  {{ Form::email('email', null, ['class' => 'form-control']) }}
</div>

<button type="submit" class="btn btn-sm btn-primary">Guardar</button>

<a href="{{ route('admin.pacient.index') }}" class="btn btn-sm btn-default">Cancelar</a>

@push('scripts')
  <script type="text/javascript">
    $('#client_type').change();
  </script>
@endpush
