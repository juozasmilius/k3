<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc._head')
</head>
<body>
    <div id="app">
        @auth
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        @include('inc.leftsidebar')
                    </div>
                    <div class="col">
                        @include('inc.navbar')
                        <main class="py-4">
                            <div class="container">
                                @include('inc.messages')
                                @yield('content')
                            </div>
                        </main>
                    </div>
                    
                </div>
            </div>
        @else
            @include('inc.navbar')
            <main class="py-4">
                <div class="container">
                    @include('inc.messages')
                    @yield('content')
                </div>
            </main>
        @endauth
        @include('inc._footer')
    </div>
    @include('inc._javascript')
</body>
</html>
