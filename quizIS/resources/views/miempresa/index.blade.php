@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.empresa.title')</h3>


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
           
                

        <a href="{{ route('miempresa.create') }}" class="btn btn-success">@lang('quickadmin.add_new')</a>          
         <a href="{{ route('miempresa.show',[$empresas->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
        <a href="{{ route('miempresa.edit',[$empresas->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                                   
                               
                  
        </div>
    </div>
@stop

@section('javascript')

    <script>
     window.route_mass_crud_entries_destroy = '{{ route('miempresa.mass_destroy') }}';
    </script>
   
@endsection