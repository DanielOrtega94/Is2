@extends('layouts.app')

@section('content')
    <h3 class="page-title">Seleccione Etapa a postular</h3>

       @if( $empresa)
        <div class="panel-body">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>


                        <th>@lang('quickadmin.etapa.fields.titulo')</th>
                        <th>@lang('Descripcion')</th>
                        <th>@lang('Requisitos')</th>
                        <th>@lang('Seleccionar Etapa')</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($etapas) > 0)

                        @foreach ($etapas as $solicitud)

                            <tr data-entry-id="{{ $solicitud->id }}">
                                
                                <td>{{ $solicitud->Nombre }}</td>
                                <td>{{ $solicitud->descripcion }}</td>
                                 <td>{{ $solicitud->requisitos }}</td> 
                                <td>
                                    <a href="{{ route('tests.edit',[$solicitud->Nombre]) }}" class="btn btn-xs btn-primary">Empezar quiz!</a>    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
       
      
        @else 
         <div class="panel-body">
                <h3 class="page-title">Porfavor registre su empresa antes de continuar.</h3>
                <a href="{{ route('miempresa.index') }}" class="btn btn-xs btn-primary">Empezar quiz!</a>  

    </div>
       @endif 

@stop
