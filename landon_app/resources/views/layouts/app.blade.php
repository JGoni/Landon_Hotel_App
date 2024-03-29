<!DOCTYPE html>
<html data-whatinput="initial" data-whatintent="mouse" class=" whatinput-types-initial"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Landon Hotel App</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="{{ asset('css/foundation.css')}}">
            <link rel="stylesheet" href="{{ asset('css/app.css')}}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css')}}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css')}}">
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="49qhhm-dropdown-menu" role="menubar">
            <li role="menuitem"><a href="./home.html">Home</a></li>
            <li role="menuitem"><a href="./clients.html">Clients</a></li>
            <li role="menuitem"><a href="./reservations.html">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    


    @yield('content')
    
    <!-- <div class="row">
      <div class="medium-6 columns">
        <h4>Landon Hotel App</h4>
        <img class="thumbnail" src="images/attractions.jpg">
      </div>
      <div class="medium-6 large-5 columns">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div> -->

    

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright 2017</li>
      </ul>
    </div>

    <script>
      $(document).foundation();
    </script>

        <script src="{{ asset('js/vendor/jquery.js')}}"></script>
        <script src="{{ asset('js/vendor/what-input.js')}}"></script>
        <script src="{{ asset('js/vendor/foundation.js')}}"></script>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('pickadate/lib/picker.js')}}"></script>
        <script src="{{ asset('pickadate/lib/picker.date.js')}}"></script>
        <script>
            $('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>