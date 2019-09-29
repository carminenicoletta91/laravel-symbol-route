<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('elem.head')

    </head>
    <body>
      @include('elem.header')
      <div class="Boxs-container">
        @yield('content')
      
      </div>
      <footer>
        <p>Questo è il footer</p>
      </footer>
    </body>
</html>
