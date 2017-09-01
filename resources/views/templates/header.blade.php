<!DOCTYPE html>
<html>
    <head>
        <title>Farmer's Paradise</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="csrf-token" content="{{ csrf_token() }}" />
          <script type="text/javascript" src="/js/jquery-3.2.1.js"></script>

          @include('templates.css')
          <!-- Scripts -->
   <script>
       window.Laravel = {!! json_encode([
           'csrfToken' => csrf_token(),
       ]) !!};
   </script>

  </head>
    <body>
        <div id="app">


        @include('templates.nav')

        <div class="container theme-showcase" role="main">

            @yield('content')

              <hr>

                </div>
        </div> <!-- /container -->

      @include('templates.scripts')
      @include('Alerts::show')
      @yield('scripts')

</body>
</html>
