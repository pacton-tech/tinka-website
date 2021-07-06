@extends('admin.layouts.app', ['title' => 'Add New Slider'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col-12">
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
                                <h3 class="mb-0">Create New Slider</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.slider.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        {!! Form::open(array('route' => 'admin.slider.store','method'=>'POST', 'files' => 'true')) !!}
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Title</label>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-control-sm', 'required' => 'required')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Caption</label>
                                    {!! Form::textarea('caption', null, array('placeholder' => 'caption goes here','class' => 'form-control form-control-sm', 'required' => 'required')) !!}
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Image</label>
                                        {!! Form::file('image', array('class' => 'form-control', 'accept' => 'image/png', 'required' => 'required')) !!}
                                        <span class="text-helper">File must be in .png (transparent) format with maximum dimension of 800px X 800px</span>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Button URL</label>
                                        {!! Form::text('url', null, array('placeholder' => 'url to link for button or leave blank if no button required','class' => 'form-control form-control-sm')) !!}
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