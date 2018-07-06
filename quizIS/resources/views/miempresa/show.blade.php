@extends('layouts.app')
@section('content')
<h3 class="page-title">@lang('quickadmin.empresa.title')</h3>

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.view')
    </div>
    
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-striped">
                    <tr> <th>@lang('quickadmin.empresa.fields.nombre')</th>
                    <th>@lang('quickadmin.empresa.fields.correo')</th>
                    <th>@lang('quickadmin.empresa.fields.direccion')</th>
                    <th>@lang('quickadmin.empresa.fields.telefono')</th>
                    <th>@lang('quickadmin.empresa.fields.etapa')</th>
                    <th>@lang('quickadmin.empresa.fields.nota')</th>
                </tr>
                <td>{{ $empresa->Nombre }}</td>
                <td>{{ $empresa->correo }}</td>
                <td>{{ $empresa->direccion }}</td>
                <td>{{ $empresa->telefono }}</td>
                <td>{{ $empresa->etapa }}</td>
                <td>{{ $empresa->telefono }}</td>
            </table>
        </div>
    </div>
    <p>&nbsp;</p>
    <a href="{{ route('miempresa.index') }}" class="btn btn-default">@lang('quickadmin.back_to_list')</a>
</div>
</div>
@stop