<div class="col-md-8 mx-auto">
  <h3>Questions</h3>
  @foreach($questions as $question)
  <div class="row border-top py-2">
    <a class="col-7 py-1" href="/questions/{{ $question->id }}">{{ $question->body }}</a>
    <div class="col-5 text-right">
      <div><small>{{ $question->created_at->diffForHumans() }}</small></div>
      <div><small>{{ $question->answers->count() }} answers</small></div>
    </div>
  </div>
  @endforeach
</div>