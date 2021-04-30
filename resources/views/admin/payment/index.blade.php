@extends('admin.layouts.app', ['title' => 'Payment'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Payment</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12"></div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Invoice #</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payment as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->billplz_id }}</td>
                                    <td>{!! $data->user->name ?? 'N/A' !!}</td>
                                    <td class="text-right">{{ number_format($data->amount,2) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}</td>
                                    <td>{!! $data->status == 'due' ? '<button class="btn btn-sm btn-warning">Due</button>' : '<button class="btn btn-sm btn-success">Active</button>' !!}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.payment.show',$data->id) }}">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="pagination">
                            {!! $payment->links() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection

@push('js')
<script type="text/javascript">

    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            event.preventDefault();
    }
</script>
@endpush