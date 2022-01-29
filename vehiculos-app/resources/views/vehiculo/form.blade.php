<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $vehiculo->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $vehiculo->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaentrada') }}
            {{ Form::text('horaentrada', $vehiculo->horaentrada, ['class' => 'form-control' . ($errors->has('horaentrada') ? ' is-invalid' : ''), 'placeholder' => 'Horaentrada']) }}
            {!! $errors->first('horaentrada', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horasalida') }}
            {{ Form::text('horasalida', $vehiculo->horasalida, ['class' => 'form-control' . ($errors->has('horasalida') ? ' is-invalid' : ''), 'placeholder' => 'Horasalida']) }}
            {!! $errors->first('horasalida', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiempoestac') }}
            {{ Form::text('tiempoestac', $vehiculo->tiempoestac, ['class' => 'form-control' . ($errors->has('tiempoestac') ? ' is-invalid' : ''), 'placeholder' => 'Tiempoestac']) }}
            {!! $errors->first('tiempoestac', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('importe') }}
            {{ Form::text('importe', $vehiculo->importe, ['class' => 'form-control' . ($errors->has('importe') ? ' is-invalid' : ''), 'placeholder' => 'Importe']) }}
            {!! $errors->first('importe', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>