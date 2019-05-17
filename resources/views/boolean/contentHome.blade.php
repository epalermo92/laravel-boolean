<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico">
    <!-- Css -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- My script -->
    <script type="text/javascript" src="{{ mix('js/app.js') }}">
    </script>
    <title>Il corso per diventare web developer e trovare un nuovo lavoro</title>
  </head>
  <body>

    <div class="container">
      @include('boolean.header')
      @yield('content')
      @include('boolean.footer')
    </div>


  </body>
</html>
