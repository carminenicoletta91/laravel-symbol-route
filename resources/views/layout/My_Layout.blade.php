<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('elem.head')

    </head>
    <body>
      <header @yield('color-header')>
        <div class="header-sx">
          <p>LOGO</p>
        </div>
        <div class="header-dx">
          <p>Nav-Bar</p>
        </div>
      </header>
      <div class="Boxs-container">
        @yield('content')

      </div>
      <footer @yield('color-footer')>
        <p>Questo è il footer</p>
      </footer>
    </body>
</html>
