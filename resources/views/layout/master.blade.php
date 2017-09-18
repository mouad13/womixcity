<!DOCTYPE html>
<html lang="fr">
  @include('layout.head')
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    @include('layout.nav')
    <div class="container">

         @yield('content')


    </div>
      @include('layout.footer')
    </body>
  </html>
