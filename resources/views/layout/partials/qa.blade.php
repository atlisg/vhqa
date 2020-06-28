<div class="col-md-8 mx-auto">
  <div class="bg-light p-3 border">
    <h3>{{ $question->body }}</h3>
    <div>
      <small>{{ $question->created_at->diffForHumans() }}</small>
    </div>
  </div>
  <h3 class="mb-3 mt-4">Answers</h3>

  @foreach($question->answers as $answer)
  <div class="row border-top py-2 mx-0">
    <div class="col-7 px-0">{{ $answer->body }}</div>
    <div class="col-5 px-0 text-right">
      <small>{{ $answer->created_at->diffForHumans() }}</small>
    </div>
  </div>
  @endforeach

  <form class="pt-5 border-top" action="/questions/{{ $question->id }}/answer" method="POST">
    @csrf
    <textarea name="answer" rows="3" class="form-control mb-3" placeholder="Speak from the heart">{{ old('answer') }}</textarea>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <button type="submit" class="btn btn-primary my-3 float-right">Submit answer</button>
  </form>
</div>