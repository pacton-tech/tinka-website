@extends('admin.layouts.app', ['title' => 'Class Management'])

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
                                <h3 class="mb-0">Class</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary mt-1" href="{{ route("app.class.fetch") }}" data-toggle="tooltip" title="Fetch latest data"><i class="fas fa-wrench"></i> Refresh</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12"></div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th width="10px">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">No. of Follower</th>
                                    <th scope="col">Version</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($halls as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->follower_num }}</td>
                                    <td>{{ $data->version }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route('admin.app.class.details',$data->id) }}">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="pagination">
                            {!! $halls->links() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection