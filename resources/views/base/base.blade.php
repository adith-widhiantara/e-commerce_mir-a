<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>@yield('title') | Mir'a Collection</title>
  </head>
  <body>
    <!-- Preloader -->
      @include('component.preloader')
    <!-- End Preloader -->

    <!-- burger & header -->
      @include('component.burger')
      @include('component.header')
    <!-- end burger & header -->

    <!-- categories -->
      @include('component.categories')
    <!-- end categories -->

    @yield('base')

    <!-- footer -->
      @include('component.footer')
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <!-- JavaScript -->
      <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
      <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
      <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
      <script src="{{ asset('js/mixitup.min.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
    <!-- End JavaScript -->
  </body>
</html>
