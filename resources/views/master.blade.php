<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      body {
          position: relative;
      }
      .affix {
          top:0;
          width: 100%;
          z-index: 9999 !important;
      }
      .navbar {
          margin-bottom: 0px;
      }

      .affix ~ .container-fluid {
         position: relative;
         top: 50px;
      }
      #section1 {padding-top: 50px}
      #section2 {padding-top: 50px}
      #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
      #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
      #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
    </style>

      @yield('script-content')

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    @yield('body-content')
  </body>
</html>
