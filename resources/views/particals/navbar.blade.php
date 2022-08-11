{{--
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">{{ lang('Articles') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('discussion') }}">{{ lang('Discussions') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('category') }}">{{ lang('Categories') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('tag') }}">{{ lang('Tags') }}</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Search Box -->
                <form class="form-inline my-2 my-lg-0 search" role="search" method="get" action="{{ url('search') }}">
                  <input class="form-control mr-sm-2" type="search" name="q" placeholder="{{ lang('Search') }}" required>
                </form>

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">{{ lang('Login') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('register') }}">{{ lang('Register') }}</a></li>
                @else
                    <li class="nav-item notification">
                        <a class="nav-link" href="{{ url('user/notification') }}"><i class="fas fa-bell">
                            <span class="new"
                            @if (Auth::user()->unreadNotifications->count() > 0)
                            style='display: block'
                            @endif
                            >
                            </span>
                        </i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->nickname ?: Auth::user()->name }}
                            <b class="caret"></b>&nbsp;&nbsp;
                            <img class="avatar rounded-circle" src="{{ Auth::user()->avatar }}">
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-item"><a href="{{ url('user', ['name' => Auth::user()->name]) }}"><i class="fas fa-user"></i>{{ lang('Personal Center') }}</a></li>
                            <li class="dropdown-item"><a href="{{ url('setting') }}"><i class="fas fa-cog"></i>{{ lang('Settings') }}</a></li>
                            @if(Auth::user()->is_admin)
                                <li class="dropdown-item"><a href="{{ url('dashboard') }}"><i class="fas fa-tachometer-alt"></i>{{ lang('Dashboard') }}</a></li>
                            @endif
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="{{ url('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>{{ lang('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
--}}
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png')}}" class="d-inline-block align-top" height="72" alt="" loading="lazy"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
		    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-uppercase px-3" href="{{ url('analytics') }}">Analytics</a>
		   </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link font-weight-bold text-uppercase px-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Segmentos <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item font-weight-bold" href="{{ url('motorista') }}">Motorista</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="{{ url('seguradora') }}">Seguradora</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="{{ url('frota') }}">Frota</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="{{ url('concessionaria') }}">Concessionária</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="{{ url('montadora') }}"> Montadora</a>
                        </div>
                    </li>
                    {{--<li class="nav-item ">
                        <a class="nav-link font-weight-bold text-uppercase px-3" href="{{ url('cases-de-sucesso') }}">Cases de Sucesso</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-uppercase px-3" href="{{ url('blog') }}">Blog</a>
                    </li/>
                    --}}
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-uppercase px-3" href="{{ url('sobre') }}">Sobre SDL</a>
                    </li>
                    
{{--
                    <li class="nav-item dropdown">
                        <a class="nav-link font-weight-bold text-uppercase px-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Segmentos <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item font-weight-bold" href="{{ url('motorista') }}">O Que Somos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="{{ url('seguradora') }}">Equipe</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="{{ url('frota') }}">A Empresa</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="{{ url('concessionaria') }}">Governança</a>
                        </div>
                    </li>--}}
                    
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase pl-3 pr-4" href="{{ url('contato') }}">Contato</a>
                    </li>
                    <li class="nav-item my-auto">
                    <a  target="_blank" class="nav-link btn btn-primary rounded-pill py-1 pt-1 text-white font-weight-bold" href="https://dashboard.smartdriving.io/#/?_k=ucslhr" >LOGIN</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
