<div class="container">
  <form action="/questions" method="POST">
    @csrf
    <textarea name="body" rows="3" class="form-control" placeholder="{{ $placeholder }}">{{ old('body') }}</textarea>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary float-right">Ask away</button>
  </form>
</div>