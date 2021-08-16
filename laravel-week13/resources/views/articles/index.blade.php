@foreach($articles as $article)
<div class="panel panel-default">

<div class="panel-heading">
<a href="{{ url('articles/'. $article->id) }}">
{{ $article->title }}
</a>
</div>
<div class="form-group">
  <label for=""></label>
  <input type="text"
    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>
<div class="panel-body">{{ $article->body }}</div>

</div>
@endforeach
