@extends('welcome')
@section('content')
<ul class="list-group">
         @foreach($posts as $post)
              <li class="list-group-item">{{ $post->title }} | <a href="/edit-post/{{$post->id}}">Edit</a></li>
         @endforeach
</ul>
@endsection