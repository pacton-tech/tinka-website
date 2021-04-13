@extends('layouts.app', ['title' => 'Borang Maklumat Pekerja'])

@section('content')
    @include('layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('borang_pekerja.index') }}"> Back</a>
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

                        @if($profile)
                        {!! Form::open(array('route' => ['borang_pekerja.update', $id], 'method' => 'patch')) !!}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label">IC</label>
                                    {!! Form::number('nric', $profile[0]['nric'] ?? null, array('class' => 'form-control form-control-sm')) !!}
                                </div>
                            </div>
                        </div>
                        @else
                        {!! Form::open(array('route' => ['borang_pekerja.create'], 'method' => 'put')) !!}
                        @endif
                        
                    </div>
                    <div class="card-footer">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(".datepicker").datepicker( {
        format: "yyyy-mm",
        startView: "months", 
        minViewMode: "months"
    });
</script>
@endpush