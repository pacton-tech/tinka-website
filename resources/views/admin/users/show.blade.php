@extends('admin.layouts.app', ['title' => 'User Details'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
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
                            <dd class="col-9">{{ strtoupper($user->role) }}</dd>

                            <dt class="col-3">Registration Date</dt>
                            <dd class="col-9">{{ $user->created_at }}</dd>
                        </dl>

                        @if($user->role != 'teacher')
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
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4>Create App Login</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.app.create.user') }}" method="post" class="">
                                @csrf
                                    <div class="form-group mb-2">
                                        <label>Name</label>
                                        <input type="fullname" class="form-control" name="fullname" placeholder="fullname" {{ $errors->has('fullname') ? 'has-error' : '' }} value="{{ $user['name'] ?? old('fullname') }}">
                                        <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Username</label>
                                        <input type="username" class="form-control" name="username" placeholder="username" {{ $errors->has('username') ? 'has-error' : '' }} value="{{ old('username') }}">
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="password" {{ $errors->has('password') ? 'has-error' : '' }} value="{{ old('password') }}">
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    </div>
                                    <?php
                                    switch ($user['role']) {
                                        case 'teacher':
                                            $type = 'teacher';
                                            break;
                                        case 'student':
                                            $type = 'student';
                                            break;
                                        default:
                                            $type = 'student';
                                            break;
                                    }
                                    ?>
                                    <input type="hidden" name="user_id" value="{{  $user->id }}">
                                    <input type="hidden" name="type" value="{{ $type }}">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4>Tinka App Login</h4>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#assign-user">Match user with Tinka App user</button>
                                    </div>
                                </div>
                            </div>
                            @if($app)
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </thead>
                                    @foreach($app as $access)
                                    <tr>
                                        <td>{!! $access['fullname'] !!}</td>
                                        <td>{!! $access['username'] !!}</td>
                                        <td>{!! strtoupper($access['type']) !!}</td>
                                        <td>
                                            <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#change-password" onclick="showUser('{{ $access['id'] }}')">Change name/password</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            @else
                            <p>No access to Tinka App yet. Create one</a>.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('admin.layouts.footers.auth')
    </div>
    
    <div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Change Name/Password</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif

                  <form action="{{ route('admin.app.update.user') }}" method="post" class="">
                    @csrf
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group mb-2">
                            <label>Name</label>
                            <input type="fullname" class="form-control" name="fullname" id="fullname" placeholder="fullname" {{ $errors->has('fullname') ? 'has-error' : '' }} value="">
                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                        </div>
                        <div class="form-group mb-2">
                            <label>Username</label>
                            <input type="username" class="form-control" name="username" id="username" placeholder="username" readonly value="">
                        </div>
                        <div class="form-group mb-2">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="New password" {{ $errors->has('password') ? 'has-error' : '' }} value="">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="type" value="" id="user_type">
                    
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                </div>
                
            </div>
        </div>
    </div>

    <div class="modal fade" id="assign-user" tabindex="-2" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Assign existing Tinka App login to this user</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif

                  <form action="{{ route('admin.app.assign.user') }}" method="post" class="">
                    @csrf
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group mb-2">
                            <label>App Username</label>
                            <select class="form-control" name="app_user_id">
                            @foreach ($app_user as $data)
                                <option value="{{ $data->id }}">{{ $data->username }}</option>
                            @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                        </div>
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="type" value="" id="user_type">
                    
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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function showUser(id)
    {
        $.ajax({
        type:'GET',
            url:'/admin/user/app/'+ id,
            success:function(msg){
                // {"id":1,"user_id":12,"username":"test01","fullname":"Fadli Pacton","password":"e10adc3949ba59abbe56e057f20f883e","type":"student","created_at":"2021-05-21T13:27:38.000000Z","updated_at":"2021-05-21T13:29:15.000000Z"}
                $('#fullname').val(msg.fullname);
                $('#username').val(msg.username);
                $('#user_type').val(msg.type);
            }
        });
    }
</script>
@endpush