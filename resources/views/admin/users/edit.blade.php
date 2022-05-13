@extends('admin.layouts.app', ['title' => 'Edit User'])

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
                                <h3 class="mb-0">Edit User</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        {!! Form::model($user, ['method' => 'PATCH','route' => ['admin.users.update', $user->id]]) !!}
                        <div class="form-group row">
                            <label class="form-control-label col-4 col-form-label">Name</label>
                            <div class="col-8">
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-control-sm')) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-control-label col-form-label col-4">E-mail Address</label>
                            <div class="col-8">
                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control form-control-sm')) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-control-label col-form-label col-4">Phone Number</label>
                            <div class="col-8">
                            {!! Form::number('phone_number', null, array('placeholder' => 'Phone Number','class' => 'form-control form-control-sm')) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-control-label col-form-label col-4">Password</label>
                            <div class="col-8">
                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control form-control-sm')) !!}
                            <span class="text-helper">Leave blank if no password change required</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-control-label col-form-label col-4">Role</label>
                            <div class="col-8">
                            <?php
                                $role = [
                                    'parent' => 'Parent',
                                    'student' => 'Student',
                                    'teacher' => 'Teacher'
                                ];
                            ?>
                            {!! Form::select('role', $role, $user->role, ['class' => 'form-control form-control-sm']) !!}
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