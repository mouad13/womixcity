<!DOCTYPE html>
<html lang="fr">
  @include('layout.head')
  <body>
    @include('layout.nav')
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
         @yield('content')
       
     </div><!--/row-->
      <hr>
      @include('layout.footer')
    </div>
      @include('layout.foot')
    </body>
  </html>
