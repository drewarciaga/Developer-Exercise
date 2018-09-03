<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home Finder') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
   <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    

    <script src="{{ asset('js/actions.js') }}"></script>
</head>
<body>
    <div id="app">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/home') }}">
                
            <img src="{{URL::asset('./images/logo.jpg')}}">
        </a>

      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About</a>
          </li>
        </ul>

      </div>
    </nav>
        <div class="wrapper">
                @include('partials.errors')
                @include('partials.success')
                @yield('content')
        </div>


    </div>


</body>
</html>
