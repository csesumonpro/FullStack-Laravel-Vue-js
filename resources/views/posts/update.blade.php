@extends('welcome')
@section ('content')
<form action="/post-update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$post->id}}">
    <div class="form-group">
    <label for="inputTitle">Title</label>
    <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="Title">
        
            @error('title')
            <div class="alert alert-warning" role="alert">
                    {{ $message }}
            </div>
            @enderror

    </div>
    <div class="form-group">
    <label for="inputBody">Body</label>
    <textarea class="form-control" name="description" rows="3" placeholder="description">
        {{$post->description}}
    </textarea>
        @error('description')
            <div class="alert alert-warning" role="alert">
                    {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

       
</form>
@endsection