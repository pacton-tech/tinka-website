@extends('layouts.app', ['title' => 'User Details'])

@section('content')
    @include('layouts.headers.generic')

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
                                <a class="btn btn-sm btn-primary" href="{{ route('users.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Profiles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Contacts</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <dl class="row">
                                            <dt class="col-3">Name</dt>
                                            <dd class="col-9">{{ $user->name }}</dd>

                                            <dt class="col-3">E-mail</dt>
                                            <dd class="col-9">{{ $user->email }}</dd>

                                            <dt class="col-3">Roles</dt>
                                            <dd class="col-9">
                                                @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                        <label class="badge badge-success">{{ $v }}</label>
                                                    @endforeach
                                                @endif
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <dl class="row">
                                            <dt class="col-3">IC No.</dt>
                                            <dd class="col-9">{!! $user->profile->nric !!}</dd>

                                            <dt class="col-3">Tarikh Lahir</dt>
                                            <dd class="col-9">{!! $user->profile->date_of_birth !!}</dd>

                                            <dt class="col-3">Status Perkahwinan</dt>
                                            <dd class="col-9">{!! $user->profile->status_perkahwinan !!}</dd>
                                            
                                            <dt class="col-3">Race</dt>
                                            <dd class="col-9">{!! $user->profile->race !!}</dd>
                                            
                                            <dt class="col-3">Religion</dt>
                                            <dd class="col-9">{!! $user->profile->religion !!}</dd>
                                            
                                            <dt class="col-3">Age</dt>
                                            <dd class="col-9">{!! $user->profile->age !!}</dd>
                                            
                                            <dt class="col-3">Gender</dt>
                                            <dd class="col-9">{!! $user->profile->city !!}</dd>
                                            
                                            <dt class="col-3">Mobile Phone No.</dt>
                                            <dd class="col-9">{!! $user->profile->mobile_no !!}</dd>
                                            
                                            <dt class="col-3">Office No.</dt>
                                            <dd class="col-9">{!! $user->profile->office_no !!}</dd>
                                            
                                            <dt class="col-3">Address</dt>
                                            <dd class="col-9">{!! $user->profile->address !!}</dd>
                                            
                                            <dt class="col-3">Postcode</dt>
                                            <dd class="col-9">{!! $user->profile->postcode !!}</dd>
                                            
                                            <dt class="col-3">State</dt>
                                            <dd class="col-9">{!! $user->profile->state !!}</dd>
                                            
                                            <dt class="col-3">City</dt>
                                            <dd class="col-9">{!! $user->profile->city !!}</dd>
                                            
                                            <dt class="col-3">Office Location</dt>
                                            <dd class="col-9">{!! $user->profile->office_location !!}</dd>
                                            
                                            <dt class="col-3">KWSP No.</dt>
                                            <dd class="col-9">{!! $user->profile->kwsp !!}</dd>
                                            
                                            <dt class="col-3">Staff No.</dt>
                                            <dd class="col-9">{!! $user->profile->staff_no !!}</dd>
                                            
                                            <dt class="col-3">Bank</dt>
                                            <dd class="col-9">{!! $user->profile->bank_name !!}</dd>
                                            
                                            <dt class="col-3">Bank Account No.</dt>
                                            <dd class="col-9">{!! $user->profile->account_no !!}</dd>
                                        </dl>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <h3>Emergency Contacts</h3>
                                        <div class="table-responsive">
                                            <table class="table align-items-center table-flush">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Contact No.</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($user->contacts as $c)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $c->full_name }}</td>
                                                        <td>{{ $c->phone_number }}</td>
                                                        <td>
                                                            <a class="btn btn-sm btn-success" href="tel:{{ $c->phone_number }}"><i class="ni chat-round"></i> Call</a>
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