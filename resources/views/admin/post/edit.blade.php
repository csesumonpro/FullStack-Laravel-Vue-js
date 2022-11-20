@extends('admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">{{ __('Post Update') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required autocomplete="title" autofocus>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="content" type="text" rows="3" cols="10" class="form-control @error('content') is-invalid @enderror" name="content"  required autocomplete="title" autofocus>
                                           {{ $post->content }}
                                            </textarea>

                                            @error('content')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Selecte Category') }}</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="custom-select" name="category_id">
                                                    <option value="">Select One</option>
                                                    @foreach($categories as $category)
                                                        <option @if($post->category_id === $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            @error('role')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $post->image }}" autocomplete="image" autofocus>
                                            <img src="{{asset('uploads/'.$post->image)}}" width="50"/>
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
