@extends('welcome')

@section('content')
<form action="/post-create" method="post">
    @csrf
    <div class="form-group">
    <label for="inputTitle">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
        
            @error('title')
            <div class="alert alert-warning" role="alert">
                    {{ $message }}
            </div>
            @enderror

    </div>
    <div class="form-group">
    <label for="inputBody">Body</label>
    <textarea class="form-control" name="description" rows="3" placeholder="description"></textarea>
        @error('description')
            <div class="alert alert-warning" role="alert">
                    {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

       
</form>
@endsection

@section('title')
Create Post
@endsection