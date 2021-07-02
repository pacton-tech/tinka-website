@extends('admin.layouts.app', ['title' => 'App User Management'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Tinka App Users</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-success" href="{{ route("app.student.refresh") }}" data-toggle="tooltip" title="Fetch latest student data">Get Student</a>
                                <a class="btn btn-sm btn-info" href="{{ route("app.teacher.refresh") }}" data-toggle="tooltip" title="Fetch latest teacher data">Get Teacher</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12"></div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th width="10px">No.</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->type }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route("app.student.fetch", $data->username) }}" data-toggle="tooltip" title="Fetch user following class">Refresh</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route("admin.app.user.show", $data->username) }}" data-toggle="tooltip" title="View app user details">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="pagination">
                            {!! $user->links() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection