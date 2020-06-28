<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layout.partials.head')
</head>

<body>
  @include('layout.partials.header')
  @include('layout.partials.new-question')
  <hr>
  @include('layout.partials.questions')
  @include('layout.partials.footer-scripts')
</body>

</html>