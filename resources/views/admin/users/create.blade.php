@extends('admin.layouts.app', ['title' => 'Add New User'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col-6">
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                                <h3 class="mb-0">Create New User</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        {!! Form::open(array('route' => 'admin.users.store','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">E-mail Address</label>
                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Role</label>
                                    {!! Form::select('role', ['student', 'teacher', 'parent'], array('placeholder' => 'Role','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection