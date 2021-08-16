<x-index>
{{--
@extends('components.index')
@section('gray')
--}}
<x-slot name="content">
@foreach ($articles as $article)    
    <div class="col-md-12" id="gray">
        <div>{{$article->title}}</div>
        <div>{{$article->body}}</div>
    </div>
@endforeach
</x-slot>
</x-index>
{{--
@endsection
--}}
{{--
@section('dark_blue')
    
        <form action="register" method="post">
            <div class="form-group">
              <label for="name">user</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="name text" placeholder="enter name">
            </div>
            <div class="form-group">
              <label for="password">password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    
@endsection('drak_blue')
--}}