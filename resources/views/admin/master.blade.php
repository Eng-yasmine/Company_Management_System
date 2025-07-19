<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Tiny Dashboard -@yield('admin_title')</title>
    @include('admin.partials.links')
</head>

<body class="vertical  light  ">
    <div class="wrapper">
      @include('admin.partials.nav')

        @include('admin.partials.sidbar')

        <main role="main" class="main-content">

       @yield('admin_content')

        </main> <!-- main -->
    </div> <!-- .wrapper -->
  @include('admin.partials.scripts')
</body>

</html>
