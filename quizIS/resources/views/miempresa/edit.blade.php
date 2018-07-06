@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.empresa.title')|</h3>
    
    {!! Form::model($empresas, ['method' => 'PUT', 'route' => ['miempresa.update', $empresas->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
               
                    {!! Form::label('Nombre Empresa', 'Nombre', ['class' => 'control-label']) !!}
                    {!! Form::text('Nombre', $empresas->Nombre, ['class' => 'form-control', 'placeholder' => '']) !!}
                    

                    {!! Form::label('Correo', 'Correo', ['class' => 'control-label']) !!}
                    {!! Form::text('Correo', $empresas->correo, ['class' => 'form-control', 'placeholder' => '']) !!}

                    {!! Form::label('Direccion', 'Direccion', ['class' => 'control-label']) !!}
                    {!! Form::text('Direccion', $empresas->direccion, ['class' => 'form-control', 'placeholder' => '']) !!}

                    {!! Form::label('Telefono', 'Telefono', ['class' => 'control-label']) !!}
                    {!! Form::text('Telefono', $empresas->direccion, ['class' => 'form-control', 'placeholder' => '']) !!}

                    {!! Form::label('rut_persona', 'Rut Persona Juridica', ['class' => 'control-label']) !!}
                    {!! Form::text('rut_juridica', $empresas->rut_juridica, ['class' => 'form-control', 'placeholder' => '']) !!}


                    <p class="help-block"></p>
                    @if($errors->has('nombre'))
                        <p class="help-block">
                            {{ $errors->first('nombre') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

