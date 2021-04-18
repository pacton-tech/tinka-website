@extends('admin.layouts.app', ['title' => 'Subscription'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Subscription Details</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.subscription.index') }}" class="btn btn-sm btn-primary">Back</a>
                                <a href="{{ route('admin.subscription.edit', $subscription->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 mt-6 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Plan</h6>
                                <h2 class="text-white mb-0">Package Desription</h2>
                                <dl class="dl-horizontal text-white">
                                    <dt>Name</dt>
                                    <dd>{{ $subscription->plan->name }}</dd>
                                    <dt>Description</dt>
                                    <dd>{{ $subscription->plan->description }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Payment</h6>
                                <h2 class="mb-0">Payment Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection