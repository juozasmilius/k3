<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="padding:2">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Ką pamatyti') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">{{ __('Pagrindinis') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">{{ __('Blogas') }}</a>
                </li>
               <!-- <li class="nav-item">
                    <a class="nav-link" href="/places">{{ __('Lankytinos vietos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/places">{{ __('Maitinimas') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/places">{{ __('Apgyvendinimas') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/places">{{ __('Nuoma') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/places">{{ __('Pramogos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/places">{{ __('Renginiai') }}</a>
                </li>-->
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Atsijugti') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
