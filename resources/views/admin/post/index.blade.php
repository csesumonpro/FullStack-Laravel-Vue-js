@extends('admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Post List</h3>
                                <div class="card-tools">
                                    <a href="{{route('post.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($posts as $post)

                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td><img src="{{asset('uploads/'.$post->image)}}" alt="" width="50"></td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->category->name}}</td>
                                            <td>{{$post->user->name}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td>
                                                <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                <form action="{{route('post.destroy', $post->id)}}" method="POST" class="post-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
