{!! Form::open(['url'=>'articles']) !!}

    @include('articles._form',['submitButtonText'=>'Add Article'])

{!! Form::close() !!}

@if($errors->any())
<ul class="alert alert-danger">  @foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>  @endif
