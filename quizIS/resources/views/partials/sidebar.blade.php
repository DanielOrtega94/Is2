@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}"">
                    <i class="fa fa-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>
           

            @if( Auth::user()->isAdmin()==False and $id = Auth::user()->getId() and count(DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->where('test',1)->select('test')->get())==1)
            <li class="{{ $request->segment(1) == 'tests' ? 'active' : '' }}">
                <a href="{{ route('tests.index') }}">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="title">Iniciar Diagnostico</span>
                </a>
            </li>
            @endif



    @if( Auth::user()->isAdmin()==False and $id = Auth::user()->getId() and count(DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->where('test',1)->get())>0)
            <li class="{{ $request->segment(1) == 'results' ? 'active' : '' }}">
                <a href="{{ route('results.index') }}">
                    <i class="fa fa-check"></i>
                    <span class="title">@lang('quickadmin.results.title')</span>
                </a>
            </li>
            @elseif(Auth::user()->isAdmin()==TRUE)
            
            <li class="{{ $request->segment(1) == 'results' ? 'active' : '' }}">
                <a href="{{ route('results.index') }}">
                    <i class="fa fa-check"></i>
                    <span class="title">@lang('quickadmin.results.title')</span>
                </a>
            </li>
            @endif
      




              @if( Auth::user()->isAdmin()==False and $id = Auth::user()->getId() and count(DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->get())>0)
            <li class="{{ $request->segment(1) == 'miempresa' ? 'active' : '' }}">
                <a href="{{ route('miempresa.index') }}">
                    <i class="fa fa-building" aria-hidden="true"
                    ></i>
                    <span class="title">@lang('quickadmin.empresa.title1')</span>
                </a>
            </li>
            @endif
            
            @if(Auth::user()->isAdmin())
            <li class="{{ $request->segment(1) == 'empresas' ? 'active' : '' }}">
                <a href="{{ route('empresas.index') }}">
                    <i class="fa fa-building" aria-hidden="true"
                    ></i>
                    <span class="title">@lang('quickadmin.empresa.title')</span>
                </a>
            </li>
            <!--           <li class="{{ $request->segment(1) == 'solicitudes' ? 'active' : '' }}">
                <a href="{{ route('solicitudes.index') }}">
                    <i class="fa fa-book" aria-hidden="true"
                    ></i>
                    <span class="title">@lang('quickadmin.solicitud.title')</span>
                </a>
            </li>
            -->
            <li class="{{ $request->segment(1) == 'etapas' ? 'active' : '' }}">
                <a href="{{ route('etapas.index') }}">
                    <i class="fa fa-th" aria-hidden="true"
                    ></i>
                    <span class="title">@lang('quickadmin.etapa.title')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'topics' ? 'active' : '' }}">
                <a href="{{ route('topics.index') }}">
                    <i class="fa fa-files-o"></i>
                    <span class="title">@lang('quickadmin.topics.title')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'questions' ? 'active' : '' }}">
                <a href="{{ route('questions.index') }}">
                    <i class="fa fa-question"></i>
                    <span class="title">@lang('quickadmin.questions.title')</span>
                </a>
            </li>
            <!--   <li class="{{ $request->segment(1) == 'questions_options' ? 'active' : '' }}">
                <a href="{{ route('questions_options.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.questions-options.title')</span>
                </a>
            </li>
            -->
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                        
                        <a href="{{ route('roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.logout')</span>
                </a>
            </li>
        </ul>
        
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}