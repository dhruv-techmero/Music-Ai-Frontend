<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{  env('LOCAL_URL').'website-assets/css/main.css' }}">
    <!-- <link rel="stylesheet" href="{{ asset('website-assets/css/embeded.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('website-assets/css/style.css') }}"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="w-full h-full bg-[#0C121F] text-gray-100 !pointer-events-auto cursor-default">
<div id="__next">
  <div class="min-h-screen grid grid-rows-[auto_1fr_auto]">
    @include('home-layout.navbar')
    <div class="w-full">
      @yield('content')
      @include('home-layout.footer')
    </div>
  </div>
</div>

</body>
</html>