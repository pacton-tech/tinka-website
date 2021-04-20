@extends('admin.layouts.app', ['title' => 'Payment'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 class="mb-0">Payment Details</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{!! $payment['url'] !!}" class="btn btn-sm btn-success" target="_blank">View Invoice</a>
                                @if($payment->subscription)
                                <a href="{{ route('admin.subscription.show', $payment->subscription->id) }}" class="btn btn-sm btn-warning">View Subscription</a>
                                @endif
                                <a href="{{ route('admin.payment.index') }}" class="btn btn-sm btn-primary">Back</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-8 mt-4 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase ls-1 mb-1">Payment</h6>
                                <h2 class="mb-0">Payment Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl class="dl-horizontal">
                            <dt>Invoice #</dt>
                            <dd>{!! $payment['billplz_id'] !!}</dd>
                            <dt>Amount (RM)</dt>
                            <dd>{!! number_format($payment['amount'],2) !!}</dd>
                            <dt>Paid</dt>
                            <dd>{!! $payment['paid'] == 'true' ? '<label class="badge badge-success">Yes</label>' : '<label class="badge badge-danger">No</label>' !!}</dd>
                            <dt>Status</dt>
                            <dd>{!! $payment['status'] == 'active' ? '<label class="badge badge-primary">Active</label>' : '<label class="badge badge-warning">Inactive</label>' !!}</dd>
                            <dt>Description</dt>
                            <dd>{!! $payment['description'] !!}</dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mt-4 mb-5 mb-xl-0">

                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">User</h6>
                                <h2 class="mb-0">User Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if($payment->user)
                        <dl class="dl-horizontal">
                            <dt>Name</dt>
                            <dd>{{ $payment->user->name }}</dd>
                            <dt>E-mail Address</dt>
                            <dd>{!! $payment->user->email !!}</dd>
                            <dt>Phone Number</dt>
                            <dd>{!! $payment->user->phone_number ?? 'N/A' !!}</dd>
                        </dl>
                        @else
                        No user data available
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection