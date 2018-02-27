<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login/Logout animation concept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
    <div class="cont">
      <!--Your page content-->
      @yield('content')
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>