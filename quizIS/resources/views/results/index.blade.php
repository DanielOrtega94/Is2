@extends('layouts.app')
@section('content')
@if(Auth::user()->isAdmin())
<h3 class="page-title">@lang('quickadmin.results.title')</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.list')
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>@lang('quickadmin.results.fields.user')</th>
                    <th>Etapa</th>
                    <th>Nota</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @if(count($results)>0)
                @foreach ($results as $result)
                <tr>
                    @if(Auth::user()->isAdmin())
                    <td>{{ $result->user->name }} ({{ $result->user->email or '' }})</td>
                    @endif
                   <!-- <td>{{ $fechas->created_at or '' }}</td>-->
                    <td>{{ $result->etapa}}</td>
                    <td>{{ $result->nota }}</td>
                   

                    <td>
                        <a href="{{ route('results.show',[$result->test]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6">@lang('quickadmin.no_entries_in_table')</td>
                </tr>
                @endif
            </tbody>
        </table>
        
    </div>
</div>


@elseif (Auth::user()->isAdmin()==FALSE and count($empresas)>0)

<h3 class="page-title">@lang('quickadmin.results.title')</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.list')
    </div>
    @if($nota[0] != 0)
         <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        Tu Nota es
                        <h1>{{$nota[0]}}</h1>
                    </div>
                    <div class="col-md-3 text-center">
                        Tu etapa es
                        <h1>{{$etapa[0]}}</h1>
                    </div>
                </div>
            </div>
    @endif
    <div class="panel-body">
        <table class="table table-bordered table-striped ">
            <thead>
                <tr>
                    
                    <th>Empresa{{$test_id}}</th>
                    <th>Fecha</th>
                    <th>Resultado</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @if(count($empresas)>0)
                <tr>
                  
                    <td>{{ $nombre_empresa[0] or '' }}</td>
                    
                    <td>{{ $fecha_test[0] or '' }}</td>
                    <td>{{ $nota[0] }}</td>
                    <td>
                        <a href="{{ route('results.show',[$test_id[0]]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                    </td>
                </tr>
                @else
                <tr>
                    <td colspan="6">@lang('quickadmin.no_entries_in_table')</td>
                </tr>
                @endif
            </tbody>
        </table>
        
    </div>
</div>


@elseif(Auth::user()->isAdmin()==FALSE and count($empresas)==0)
<div class="panel-body">
            <div class="row">
                <div class="col-md-5 text-center">
                    Porfavor registre una empresa y empiece el quiz, para mostrar los resultados.
                    <p>
                    <a href="{{ route('miempresa.create') }}" class="btn btn-success">@lang('quickadmin.add_new')</a>
                    </p>
                </div>
            </div>
  
        </div>

@endif



@stop