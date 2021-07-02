@extends('admin.layouts.app', ['title' => 'App User Management'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col-md-9">
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
                            <div class="col-md-6">
                                <h3 class="mb-0">Class Following</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#add-class" title="Add student to this class"><i class="fas fa-plus"></i> Add this user into another class</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12"></div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th width="10px">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Follower</th>
                                    <th scope="col">Date Update</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hall as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->halls->name }}</td>
                                    <td>{{ $data->halls->description }}</td>
                                    <td>{{ $data->halls->follower_num }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route('admin.app.class.details',$data->halls->id) }}">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">User Details</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Username</dt>
                            <dd>{{ $user->username }}</dd>
                            <dt>Type</dt>
                            <dd>{{ ucfirst($user->type) }}</dd>
                            <dt>Created</dt>
                            <dd>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s A') }}</dd>
                            <dt>Updated</dt>
                            <dd>{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s A') }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>

    <div class="modal fade" id="add-class" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Choose class</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                  <form action="{{ route('app.assign.hall') }}" method="post" class="">
                    @csrf
                    <div class="form-group mb-2">
                        <label>Class</label>
                        <select class="form-control" name="hall_id" id="hall_id">
                            @foreach($app_hall as $app)
                            <option value="{{ $app['hall_id'] }}">{{ $app['name'] }}</option>
                            @endforeach
                        </select>
                    </div>                 
                    <input type="hidden" name="username" id="username" value="{{ $user->username }}">                    
                    <input type="hidden" name="user_id" id="user_id" value="{{ $user->app_id }}">                    
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                </div>
                
            </div>
        </div>
    </div>
        
@endsection

@push('js')
<script type="text/javascript">
    $('#user_id').change(function(){
        var username = $('#user_id option:selected').text();
        $('#username').val(username);
    });
</script>
@endpush