<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('page-title') - A Simple Laravel Application</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ url('/css/main.css') }}" />
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                @include('partials.navbar')
                <section>
                    <header class="main">
                        @if(\Session::has('success'))
                        <div class="col-12">
                            <blockquote>{{ \Session::pull('success') }}</blockquote>
                        </div>
                        @endif
                        <h1>@yield('page-header')</h1>
                    </header>
                    @yield('page-content')
                </section>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
    <script src="{{ url('/js/app.js') }}"></script>
</body>

</html>