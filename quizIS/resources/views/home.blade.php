@extends('layouts.app')
@section('content')
@if($usuario)
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">Bienvenido! Aqui se muestra un resumen</div>
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
                        <h1>{{ number_format($nota, 2) }} / 7</h1>
                        @lang('quickadmin.home.promedio')
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Empresas en etapa</div>
            <div class="panel-body">
                <div class="row">
                    
                    <div class="col-md-5 text-center">
                        <h1>{{ $idea }}</h1>
                        Idea
                    </div>
                    <div class="col-md-5 text-center">
                        <h1>{{ $semilla }}</h1>
                        Semilla
                    </div>
                    <div class="col-md-5 text-center">
                        <h1>{{ $temprana }}</h1>
                        Temprana
                    </div>
                    <div class="col-md-5 text-center">
                        <h1>{{ $expansion }}</h1>
                        Expansion
                    </div>
                    <div class="col-md-5 text-center">
                        <h1>{{ $internacionalizacion }}</h1>
                        Internacionalizacion
                    </div>
                    <div class="col-md-5 text-center">
                        <h1>{{ $retorno }}</h1>
                        Retorno/declive
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@else
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Bienvenido, aqui puedes ver un resumen</h3></div>
            @if(count($empresas)>0 && $test[0]==1)
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        Tu Nota es
                        <h1>{{ $nota[0] }}</h1>
                    </div>
                    <div class="col-md-3 text-center">
                        Tu etapa es
                        <h1>{{ $etapa[0] }}</h1>
                    </div>
                </div>
            </div>
        </div>
         @elseif(count($empresas)>0 and $test[0]==0)
        <div class="row" style="text-align: center">
                <div class="text-center">
                    Porfavor empieze el diagnostico, para poder mostrar un resumen
                    <p>

                     <a href="{{ route('tests.index') }}" class="btn btn-success">Empezar Quiz</a>
                    </p>
                </div>
            </div>
        </div>
        @elseif(count($empresas)==0 )
        <div class="panel-body">
            <div class="row" style="text-align: center">
                <div class="text-center">
                    Porfavor registre una empresa, para poder realizar el diagnostico

                     
                    <p>
                    <a href="{{ route('miempresa.create') }}" class="btn btn-success">Registrar Empresa</a>
                    </p>
                </div>
            </div>
        </div>
            @endif
    </div>
</div>
@endif
@endsection