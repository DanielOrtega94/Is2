@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center" style="color: white"><img  src="/images/aceleralatam.png"></h1>
   
            <br />
             <div class="panel panel-default">
                <div class="panel-heading">@lang('quickadmin.login.titulo')</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Hay problemas con el ingreso:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.login.mail')</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.login.contrasena')</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> Recuerdame 
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary">
                                     @lang('quickadmin.login.ingresar')
                                </button>
                                <a href="{{ route('auth.register') }}"
                                        class="btn btn-default">
                                     @lang('quickadmin.login.registro')
                                </a>
                                <br>
                                <a href="{{ route('auth.password.reset') }}"> @lang('quickadmin.login.olvido')</a>
                                <br>
                              <!--  
                                <br>
                                Or login with:
                                <br>
                                <a href="{{ route('oauth2google') }}"
                                        class="btn btn-info">
                                    Google
                                </a>
                                <a href="{{ route('oauth2facebook') }}"
                                        class="btn btn-info">
                                    Facebook
                                </a>
                                <a href="{{ route('oauth2github') }}"
                                        class="btn btn-info">
                                    GitHub
                                </a>
                               --> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center" style="color: white">Modificado para Proyecto IS2</a></div>
          
        </div>
    </div>
@endsection
