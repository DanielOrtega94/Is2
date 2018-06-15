@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.etapa.title')</h3>

    <p>
        <a href="{{ route('etapas.create') }}" class="btn btn-success">@lang('quickadmin.add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($etapas) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('quickadmin.etapa.fields.titulo')</th>
                      
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($etapas) > 0)
                        @foreach ($etapas as $etapa)
                            <tr data-entry-id="{{ $etapa->Nombre }}">
                                <td></td>
                                <td>{{ $etapa->Nombre }}</td>
                               
                                <td>
                                    <a href="{{ route('etapas.show',[$etapa->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                    <a href="{{ route('etapas.edit',[$etapa->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
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