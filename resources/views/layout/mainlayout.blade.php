<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layout.partials.head')
</head>

<body>
  <div class="container">
    @include('layout.partials.header')
    @include('layout.partials.new-question')
    @include('layout.partials.questions')
    @include('layout.partials.footer-scripts')
  </div>
</body>

</html>