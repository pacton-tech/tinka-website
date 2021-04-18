@extends('layouts.app', ['title' => 'Edit User'])

@section('content')
    @include('layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit User</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('users.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

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

                        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    {!! Form::text('name',  $user->name, array('placeholder' => 'Name','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">E-mail Address</label>
                                    {!! Form::text('email', $user->email, array('placeholder' => 'Email','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Confirm Password</label>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">IC No.</label>
                                    {!! Form::text('nric', $user->profile->nric, array('placeholder' => 'XXXXXX-XX-XXXX','class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Date of Birth</label>
                                    {!! Form::text('date_of_birth', $user->profile->date_of_birth, array('class' => 'form-control form-control-sm datepicker')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Status Perkahwinan</label>
                                    {!! Form::select('status_perkahwinan', ['Kahwin' => 'Kahwin', 'Bujang' => 'Bujang', 'Duda' => 'Duda', 'Janda' => 'Janda'], $user->profile->status_perkahwinan, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Race</label>
                                    {!! Form::select('race', ['Melayu' => 'Melayu', 'Cina' => 'Cina', 'India' => 'India', 'Lain-lain' => 'Lain-lain'], $user->profile->race, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Religion</label>
                                    {!! Form::select('religion', ['Islam' => 'Islam', 'Buddha' => 'Buddha', 'Hindu' => 'Hindu', 'Kristian' => 'Kristian', 'Lain-lain' => 'Lain-lain'], $user->profile->religion, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Age</label>
                                    {!! Form::number('age', $user->profile->age, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <h5>Gender</h5>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="male" name="gender" class="custom-control-input" value="Male" {{ $user->profile->gender == 'Male' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="male">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="female" name="gender" class="custom-control-input" value="Female" {{ $user->profile->gender == 'Female' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="female">Female</label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Address</label>
                                    {!! Form::textarea('address', $user->profile->address, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Postcode</label>
                                    {!! Form::number('postcode', $user->profile->postcode, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">State</label>
                                    {!! Form::select('state', ['Perlis', 'Kedah', 'Pulau Pinang', 'Kelantan', 'Terengganu', 'Perak', 'Pahang', 'Johor', 'Melaka', 'Negeri Sembilan', 'Kuala Lumpur', 'Selangor', 'Sabah', 'Sarawak'], $user->profile->state, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">City</label>
                                    {!! Form::text('city', $user->profile->city, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Mobile No.</label>
                                    {!! Form::number('mobile_no', $user->profile->mobile_no, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Office No.</label>
                                    {!! Form::number('office_no', $user->profile->office_no, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Office Location</label>
                                    {!! Form::text('office_location', $user->profile->office_location, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">KWSP</label>
                                    {!! Form::text('kwsp', $user->profile->kwsp, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Staff No.</label>
                                    {!! Form::text('staff_no', $user->profile->staff_no, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Bank</label>
                                    {!! Form::text('bank_name', $user->profile->bank_name, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Bank Account No.</label>
                                    {!! Form::text('bank_account', $user->profile->bank_account, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Role</label>
                                    {!! Form::select('roles', $roles,[], array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@endpush

@push('js')
<script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(".datepicker").datepicker({
        format: "yyyy-mm-dd"
    });
</script>
@endpush