<div class="container">
  @foreach($questions as $question)
  {{ $question->body }}
  <br>
  <small>{{ $question->created_at }}</small>
  <br>
  <small>{{ $question->answers->count() }} answers</small>
  <br>
  @foreach($question->answers as $answer)
  <small>{{ $answer->body }}</small>
  <br>
  @endforeach
  <hr>
  @endforeach
</div>