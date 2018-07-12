@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.questions-options.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>Pregunta</th>
                    <td>{{ $questions_option->question->question_text or '' }}</td></tr><tr><th>Opción</th>
                    <td>{{ $questions_option->option }}</td></tr><tr><th>Puntaje</th>
                    <td>{{ $questions_option->puntaje }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('questions_options.index') }}" class="btn btn-default">@lang('quickadmin.back_to_list')</a>
        </div>
    </div>
@stop