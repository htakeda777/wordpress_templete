<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>


<!-- contentsWrap -->
<div id="contentsWrap" class="section1200">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')
 </div>
    @include('partials.global_menu')



  </body>
</html>
