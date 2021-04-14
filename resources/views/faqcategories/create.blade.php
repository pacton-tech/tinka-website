@extends('faqcategories.layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-8 col-xs-offset-2 margin-tb">
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('faqcategories.index') }}"> Back</a>
        </div>
    </div>
</div>
    <div class="text-center">
            <h2>Add New Category</h2>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @csrf
  
    <div class="col-sm-8 col-xs-offset-2">
        <div class="well">
            {{ Form::open(['route' => 'faqcategories.store']) }}
            <br>
            {{ Form::label('categoryname', 'Categoryname') }}
            {{ Form::text('categoryname', '', ['class'=> 'form-control']) }}
            <br>
            <div class="text-center"> 
                {{ Form::submit('Create', ['class'=> 'btn btn-primary ']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>


@endsection