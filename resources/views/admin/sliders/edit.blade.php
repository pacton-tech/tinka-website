@extends('admin.layouts.app', ['title' => 'Edit Slider'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit Slider</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.slider.index') }}"> Back</a>
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

                        {!! Form::model($slider, ['method' => 'PATCH','route' => ['admin.slider.update', $slider->id], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Title</label>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-control-sm', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Caption</label>
                                            {!! Form::textarea('caption', null, array('placeholder' => 'caption goes here','class' => 'form-control form-control-sm', 'required' => 'required')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Button URL</label>
                                            {!! Form::text('url', null, array('placeholder' => 'url to link for button or leave blank if no button required','class' => 'form-control form-control-sm')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Enabled</label>
                                            {!! Form::checkbox('enabled', true, array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Image</label>
                                        {!! Form::file('image', array('class' => 'form-control', 'accept' => 'image/png')) !!}
                                        <span class="text-helper">File must be in .png (transparent) format with maximum dimension of 800px X 800px</span>
                                        <img src="{{ slider_url($slider->image) }}"/>
                                    </div>
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