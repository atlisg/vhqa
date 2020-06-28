<form action="/questions" method="POST">
  @csrf
  <div class="col-md-8 mx-auto mb-2">
    <textarea name="question" rows="3" class="form-control mb-3" placeholder="{{ $placeholder }}">{{ old('question') }}</textarea>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="text-right">
      <button type="submit" class="btn btn-primary my-3">Ask away</button>
    </div>
  </div>
</form>