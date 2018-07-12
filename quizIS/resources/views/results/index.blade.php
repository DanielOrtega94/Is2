@extends('layouts.app')
@section('content')
@if(Auth::user()->isAdmin())
<h3 class="page-title">@lang('quickadmin.results.title')</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.list')
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
            <thead>
                <tr>
                    
                    <th>@lang('quickadmin.results.fields.user')</th>
                    <th>@lang('quickadmin.results.fields.date')</th>
                    <th>Result</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @if (count($results) > 0)
                @foreach ($results as $result)
                <tr>
                    @if(Auth::user()->isAdmin())
                    <td>{{ $result->user->name or '' }} ({{ $result->user->email or '' }})</td>
                    @endif
                    <td>{{ $result->created_at or '' }}</td>
                    <td>{{ $result->result }}/7</td>
                    <td>
                        <a href="{{ route('results.show',[$result->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
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


@elseif(Auth::user()->isAdmin()==FALSE and count($empresas)>0)

<h3 class="page-title">@lang('quickadmin.results.title')</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.list')
    </div>
         <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <h1></h1>
                        Tu Nota es
                    </div>
                    <div class="col-md-3 text-center">
                        <h1></h1>
                        Tu etapa es
                    </div>
                </div>
            </div>

    <div class="panel-body">
        <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
            <thead>
                <tr>
                    
                    <th>@lang('quickadmin.results.fields.user')</th>
                    <th>@lang('quickadmin.results.fields.date')</th>
                    <th>Result</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @if (count($results) > 0)
                @foreach ($results as $result)
                <tr>
                  
                    <td>{{ $result->user->name or '' }} ({{ $result->user->email or '' }})</td>
                  
                    <td>{{ $result->created_at or '' }}</td>
                    <td>{{ $result->result }}/10</td>
                    <td>
                        <a href="{{ route('results.show',[$result->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
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