@extends('admin.layouts.app', ['title' => 'Subscription'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Upgrade/Downgrade Subscription for {{ $subscription['student_name'] }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.subscription.index') }}"> Back</a>
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

                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    @foreach($plan as $data)
                                    <div class="col-3">
                                        <div class="card mb-3">
                                            <img class="card-img-top" src="{{ asset('assets/img/portfolio/'.$data['id'].'.png') }}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $data['name'] }}</h5>
                                                <p class="card-text">{{ $data['description'] }}<br>
                                                Price: RM {{ $data['price'] }}/subject<br>
                                                Renewal: Every {{ $data['invoice_period'].' '.$data['invoice_interval'] }}</p>
                                                <a href="#" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-3">
                                <h3>Current Plan</h3>
                                <h2>{{ $subscription->plan->name }}</h2>
                                <p>{{ $subscription->plan->description }}</p>
                                <h3>Subscription details</h3>
                                <ul>
                                <li>Price: RM {{ $subscription->plan->price }}/subject</li>
                                <li>Renewal: Every {{ $subscription->plan->invoice_period.' '.$subscription->plan->invoice_interval }}</li>
                                </ul>
                                <?php $subject = explode(',', $subscription['subjects']); ?>
                                @foreach($subject as $key => $value)
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="subject-{{ $key }}" checked disabled="" value="{{ $value }}">
                                <label class="custom-control-label" for="subject-{{ $key }}">{{ $value }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::open(array('route' => ['admin.subscription.update', $id], 'method' => 'patch', 'name' => 'downgrade')) !!}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth')
    </div>
@endsection