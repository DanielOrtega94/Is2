@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.etapa.title')</h3>
    
    {!! Form::model($etapas, ['method' => 'PUT', 'route' => ['etapas.update', $etapas->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
               
                    {!! Form::label('nombre', 'Nombre*', ['class' => 'control-label']) !!}
                    {!! Form::text('Nombre', old('Nombre'), ['class' => 'form-control', 'placeholder' => '']) !!}
                     {!! Form::label('descripcion', 'descripcion', ['class' => 'control-label']) !!}
                    {!! Form::text('descripcion', old('descripcion'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    {!! Form::label('requisitos', 'requisitos', ['class' => 'control-label']) !!}
                    {!! Form::text('requisitos', old('requisitos'), ['class' => 'form-control', 'placeholder' => '']) !!}
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

