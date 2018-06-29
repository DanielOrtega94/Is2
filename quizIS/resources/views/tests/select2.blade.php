@extends('layouts.app')

@section('content')
    <h3 class="page-title">Seleccione Dimension a Rellenar primero</h3>

       @if( $empresa)
        <div class="panel-body">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>


                        <th>@lang('quickadmin.etapa.fields.titulo')</th>
                        <th>@lang('Descripcion')</th>
                        <th>@lang('Seleccionar Dimension')</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($dimensiones) > 0)

                        @foreach ($dimensiones as $solicitud)

                            <tr data-entry-id="{{ $solicitud->id }}">
                                <td>{{ $solicitud->title }}</td>
                                <td>{{ $solicitud->descripcion }}</td>
                                <td class="col-sm-1">
                                    <a href="{{ route('tests.select') }}" class="btn btn-s btn-primary">Ingresar</a>    
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
    </div>
       @endif 

@stop
