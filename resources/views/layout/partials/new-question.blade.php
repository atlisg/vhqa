<div class="container">
  <form action="/questions" method="POST">
    @csrf
    <textarea name="body" rows="3" class="form-control" placeholder="{{ $placeholder }}"></textarea>
    <button type="submit" class="btn btn-primary float-right">Ask away</button>
  </form>
</div>