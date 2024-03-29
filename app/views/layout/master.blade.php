<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}
    {{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
    {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}
    @yield('head')
  </head>

  <body>
    @include('layout.navbar')
    <div class="container">

      @yield('content')

    </div> <!-- /container -->
  </body>
</html>