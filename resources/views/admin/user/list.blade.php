@extends('admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User List</h3>
                                <div class="card-tools">
                                   <a href="{{route('user.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                                <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
