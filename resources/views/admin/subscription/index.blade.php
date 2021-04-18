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
                                <h3 class="mb-0">Subscription</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12"></div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Parent Name</th>
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
                                @foreach ($subscription as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->student_name }}</td>
                                    <td class="text-uppercase">{!! str_replace("-", " ", $data->plan->category) !!}</td>
                                    <td>{{ $data->plan->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->starts_at)->format('d/m/Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->ends_at)->format('d/m/Y') }}</td>
                                    <td>{!! \Carbon\Carbon::parse($data->ends_at)->diffForHumans() !!}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route('admin.subscription.show',$data->id) }}">View</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.subscription.edit',$data->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.subscription.destroy', $data->id],'style'=>'display:inline']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="pagination">
                            {!! $subscription->links() !!}
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