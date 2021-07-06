@extends('admin.layouts.app', ['title' => 'Slider Details'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Slider Details for {{ $slider->name }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.slider.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-3">Name</dt>
                            <dd class="col-9">{{ $slider->name }}</dd>

                            <dt class="col-3">Caption</dt>
                            <dd class="col-9">{{ $slider->caption }}</dd>

                            <dt class="col-3">Status</dt>
                            <dd class="col-9">{!! status_case($slider->enabled) !!}</dd>

                            <dt class="col-3">Image</dt>
                            <dd class="col-9">
                                <img src="{{ slider_url($slider->image) }}"/>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
        @include('admin.layouts.footers.auth')
    </div>
@endsection