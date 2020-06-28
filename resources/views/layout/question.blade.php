<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layout.partials.head')
</head>

<body>
  @include('layout.partials.header')
  <div class="container">
    <h3>{{ $question->body }}</h3>
    <br>
    <small>{{ $question->created_at->diffForHumans() }}</small>
    <br>
    <small>{{ $question->answers->count() }} answers</small>
    <br>
    @foreach($question->answers as $answer)
    <small>{{ $answer->body }}</small>
    <small>{{ $answer->created_at->diffForHumans() }}</small>
    <br>
    @endforeach
    <hr>
    <div class="container">
      <form action="/questions/{{ $question->id }}/answer" method="POST">
        @csrf
        <textarea name="body" rows="3" class="form-control" placeholder="Answer the question"></textarea>
        <button type="submit" class="btn btn-primary float-right">Submit answer</button>
      </form>
    </div>
  </div>
  @include('layout.partials.footer-scripts')
</body>

</html>