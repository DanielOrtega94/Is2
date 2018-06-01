@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.etapa.titulo')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['etapas.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
                    {!! Form::text('Nombre', old('Nombre'), ['class' => 'form-control', 'placeholder' => '']) !!}
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


