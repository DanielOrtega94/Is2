@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('quickadmin.home.bienvenida')</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1>{{ $questions }}</h1>
                            @lang('quickadmin.home.preguntas')
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $users }}</h1>
                            @lang('quickadmin.home.registrado')
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $quizzes }}</h1>
                            @lang('quickadmin.home.encuestas')
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ number_format($average, 2) }} / 10</h1>
                           @lang('quickadmin.home.promedio')
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-success">Realizar nuevo diagnóstico</a>
        </div>
    </div>
@endsection
