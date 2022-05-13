@extends('admin.layouts.app', ['title' => 'User Management'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                @if (session('info'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <i class="fas fa-info-circle"></i> {{ session('info') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-triangle"></i> {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="mb-0">Users</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="{{ route('admin.users.index') }}" method="GET" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="term" placeholder="Search users by name, email, role">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-default btn-sm">
                                                        <span class="fas fa-search"></span>
                                                    </button>
                                                </span>
                                                <span class="input-group-btn">
                                                    <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-warning">Clear</a>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary">Add user</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12"></div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone No.</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone_number }}</td>
                                    <td>{{ $data->role }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route('admin.users.show',$data->id) }}">View</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit',$data->id) }}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="pagination">
                            {!! $user->withQueryString()->links() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection