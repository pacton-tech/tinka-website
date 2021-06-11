@extends('admin.layouts.app', ['title' => 'Class Details'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            
            <div class="col-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Class Details</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-success" href="{{ route("app.class.refresh", $hall->uuid) }}" data-toggle="tooltip" title="Fetch latest class data">Refresh</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <dl class="row">
                            @foreach ($hall->getAttributes() as $key => $value)
                            <dt class="col-3">{{ label_case($key) }}</dt>
                            <dd class="col-9">{!! $value !!}</dd>
                            @endforeach
                        </dl> 
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.class.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            <div class="col-8">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Student Details</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#add-user" title="Add student to this class"><i class="fas fa-plus"></i> Add someone into this class</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th width="10px">No.</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route("admin.app.user.show", $data->username) }}" data-toggle="tooltip" title="View app user details">View user details</a>
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

    <div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Choose username</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                  <form action="{{ route('app.assign.hall') }}" method="post" class="">
                    @csrf
                    <div class="form-group mb-2">
                        <label>Username</label>
                        <select class="form-control" name="user_id" id="user_id">
                            @foreach($app_user as $app)
                            <option value="{{ $app['app_id'] }}">{{ $app['username'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="hall_id" value="{{ $hall->hall_id }}">                    
                    <input type="hidden" name="username" id="username">                    
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