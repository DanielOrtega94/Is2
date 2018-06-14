@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.empresa.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['empresas.store']]) !!}


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Nombre Empresa', 'Nombre', ['class' => 'control-label']) !!}
                    {!! Form::text('Nombre', old('Nombre'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    
                    {!! Form::label('user_id', 'Nombre Usuario', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $usuarios, old('user_id'), ['class' => 'form-control']) !!}

                    {!! Form::label('Correo', 'Correo', ['class' => 'control-label']) !!}
                    {!! Form::text('Correo', old('Correo'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    {!! Form::label('Direccion', 'Direccion', ['class' => 'control-label']) !!}
                    {!! Form::text('Direccion', old('Direccion'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    {!! Form::label('Telefono', 'Telefono', ['class' => 'control-label']) !!}
                    {!! Form::text('Telefono', old('Telefono'), ['class' => 'form-control', 'placeholder' => '']) !!}

                    {!! Form::label('rut_persona', 'Rut Persona Juridica', ['class' => 'control-label']) !!}
                    {!! Form::text('rut_juridica', old('rut_juridica'), ['class' => 'form-control', 'placeholder' => '']) !!}


                    <p class="help-block"></p>
                    @if($errors->has('Nombre'))
                        <p class="help-block">
                            {{ $errors->first('Nombre') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


