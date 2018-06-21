@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.solicitud.title')</h3>



    <div class="panel panel-default">
        <div class="panel-heading">
            Solicitudes Modificaciones de respuesta
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($solicitudes) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('quickadmin.etapa.fields.titulo')</th>
                      
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($solicitudes) > 0)
                        @foreach ($solicitudes as $solicitud)
                            <tr data-entry-id="{{ $solicitud->empresa }}">
                                <td></td>
                                <td>{{ $solicitud->empresa }}</td>
                               
                                <td>
                                    <a href="{{ route('solicitudes.show',[$solicitud->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                    <a href="{{ route('solicitudes.edit',[$solicitud->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['etapas.destroy', $solicitud->id])) !!}
                                    {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


<div class="panel panel-default">
        <div class="panel-heading">
            Solicitudes Modificaciones de datos Empresa
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($solicitudes) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('quickadmin.etapa.fields.titulo')</th>
                      
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($solicitudes) > 0)
                        @foreach ($solicitudes as $etapa)
                            <tr data-entry-id="{{ $etapa->Nombre }}">
                                <td></td>
                                <td>{{ $etapa->Nombre }}</td>
                               
                                <td>
                                    <a href="{{ route('solicitudes.show',[$etapa->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                    <a href="{{ route('solicitudes.edit',[$etapa->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['etapas.destroy', $etapa->id])) !!}
                                    {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">@lang('quickadmin.no_entries_in_table')</td>
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