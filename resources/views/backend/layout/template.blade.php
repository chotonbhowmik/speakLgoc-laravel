
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.header')
    {{-- @include('backend.includes.css') --}}
  </head>

  <body>
@include('backend.includes.menu')

@include('backend.includes.topbar')


    <div class="dashboardInner">
    @yield('body')

    </div>

@include('backend.includes.script')

  </body>
</html>
