<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-off">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
    -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="icon" sizes="76x76" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon.png') }}">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/black-dashboard-react.css') }}" />
    <title>Black Dashboard React by Creative Tim</title>
  </head>
  <body>
    <noscript>
      You need to enable JavaScript to run this app.
    </noscript>

    @yield('content')
   
    <script src="{{ asset('assets/js/merge-react.js') }}" type="text/javascript"></script>
  </body>
</html>
