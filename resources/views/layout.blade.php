<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Fotos - iMagic</title>

    <meta name="description" content="Alamacena tus fotos en iMagic.">

    <!-- og tags Facebook -->
    <!-- og tags Google+ -->
    <!-- Twitter Cards -->

    <!-- Stylesheets -->
    <link rel="icon" href="//ssl.gstatic.com/social/photosui/images/logo_photos_color_192.png" sizes="192x192"/>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    @yield('content')

    <!-- Scripts -->
    @yield('scripts')

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
    <!-- End Google Analytics -->
  </body>
</html>
