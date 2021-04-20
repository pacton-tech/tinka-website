@extends('admin.layouts.app', ['title' => 'User Details'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">User Details for {{ $user->name }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-3">Name</dt>
                            <dd class="col-9">{{ $user->name }}</dd>

                            <dt class="col-3">E-mail</dt>
                            <dd class="col-9">{{ $user->email }}</dd>

                            <dt class="col-3">Roles</dt>
                            <dd class="col-9">{{ $user->role }}</dd>

                            <dt class="col-3">Registration Date</dt>
                            <dd class="col-9">{{ $user->created_at }}</dd>
                        </dl>

                        <h2>Subscription</h2>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Student Name</th>
                                        <th>Category</th>
                                        <th scope="col">Plan</th>
                                        <th scope="col">Start</th>
                                        <th scope="col">End</th>
                                        <th>Expiry</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->subscriptions as $data)
                                    <tr>
                                        <td>{{ $data->student_name }}</td>
                                        <td class="text-uppercase">{!! str_replace("-", " ", $data->plan->category) !!}</td>
                                        <td>{{ $data->plan->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->starts_at)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->ends_at)->format('d/m/Y') }}</td>
                                        <td>@if(\Carbon\Carbon::now() > $data->ends_at)
                                            <label class="badge badge-danger">Expired</label>
                                            @else
                                            {!! \Carbon\Carbon::parse($data->ends_at)->diffForHumans() !!}
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="{{ route('admin.subscription.show',$data->id) }}">View</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                </div>
            </div>
        </div>
    </div>
        
@endsection