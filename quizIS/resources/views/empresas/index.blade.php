@extends('layouts.app')
@section('content')
<h3 class="page-title">@lang('quickadmin.empresa.title')</h3>
<p>
   

    <a href="{{config('app.url')}}/report?tablename=empresas&colnames=(Nombre,correo,direccion,nota)" class="btn btn-success">Generar Reporte</a>
</p>



<div class="panel panel-default">
    <div class="panel-heading">
        @lang('quickadmin.list')
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped {{ count($empresas) > 0 ? 'datatable' : '' }} dt-select">
            <thead>
                <tr>
                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                    <th>@lang('quickadmin.empresa.fields.nombre')</th>
                    <th>@lang('quickadmin.empresa.fields.correo')</th>
                    <th>@lang('quickadmin.empresa.fields.direccion')</th>
                    <th>@lang('quickadmin.empresa.fields.telefono')</th>
                    <th>@lang('quickadmin.empresa.fields.etapa')</th>
                    <th>@lang('quickadmin.empresa.fields.nota')</th>
                    
                    
                    <th>&nbsp;</th>
                </tr>
            </thead>
            
            <tbody>
                @if (count($empresas) > 0)
                @foreach ($empresas as $empresa)
                <tr data-entry-id="{{ $empresa->Nombre }}">
                    <td></td>
                    <td>{{ $empresa->Nombre }}</td>
                    <td>{{ $empresa->correo }}</td>
                    <td>{{ $empresa->direccion }}</td>
                    <td>{{ $empresa->telefono }}</td>
                    <td>{{ $empresa->etapa[0] or '' }}</td>
                    <td>{{ $empresa->nota }}</td>
                    
                    
                    <td>
                        <a href="{{ route('empresas.show',[$empresa->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                        <a href="{{ route('empresas.edit',[$empresa->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                        'route' => ['empresas.destroy', $empresa->id])) !!}
                        {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="9">@lang('quickadmin.no_entries_in_table')</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop
@section('javascript')
<script>
window.route_mass_crud_entries_destroy = '{{ route('etapas.mass_destroy') }}';
</script>

@endsection