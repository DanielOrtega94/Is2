@extends('layouts.app')
@section('content')
<h3 class="page-title">@lang('quickadmin.questions.title')</h3>

{!! Form::model($question, ['method' => 'PUT', 'route' => ['questions.update', $question->id]]) !!}
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.edit')
    </div>
    <div class="panel-body">
        
        <div class="row">
            <div class="col-xs-12 form-group">
                <kbd>{!! Form::label('topic_id', 'Topico*', ['class' => 'control-label']) !!}</kbd>
                {!! Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control']) !!}
                <p class="help-block"></p>
                @if($errors->has('topic_id'))
                <p class="help-block">
                    {{ $errors->first('topic_id') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <kbd>{!! Form::label('question_text', 'Pregunta*', ['class' => 'control-label']) !!}</kbd>
                {!! Form::text('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('question_text'))
                <p class="help-block">
                    {{ $errors->first('question_text') }}
                </p>
                @endif
            </div>
        </div>
        <div id="id2" class="table-responsive">
            <table class="table table-bordered" id="dynamic_field">
                <label class="control-label"><kbd>Opciones*</label>
                <tr>
                    <div class="row">
                        <td><input type="text" name="name[]" placeholder="Ingrese opción" class="form-control name_list" /></td>
                        <td><input type="number" name="val[]" placeholder="Puntaje" class="form-control  "></td>
                    </div>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Añadir más</button></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <kbd>{!! Form::label('answer_explanation', 'Explicación Respuesta*', ['class' => 'control-label']) !!}</kbd>
                {!! Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('answer_explanation'))
                <p class="help-block">
                    {{ $errors->first('answer_explanation') }}
                </p>
                @endif
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 form-group">
                <kbd>{!! Form::label('ponderation', 'Ponderacion*', ['class' => 'control-label']) !!}</kbd>
                {!! Form::number('ponderation', old('ponderation'), ['class' => 'form-control', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('ponderation'))
                <p class="help-block">
                    {{ $errors->first('ponderacion') }}
                </p>
                @endif
            </div>
        </div>
        
    </div>
</div>
{!! Form::submit(trans('quickadmin.update'), ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@stop