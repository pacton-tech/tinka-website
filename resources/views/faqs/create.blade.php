@extends('faqs.layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-8 col-xs-offset-2 margin-tb">
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('faqs.index') }}"> Back</a>
        </div>
    </div>
</div>
    <div class="text-center">
            <h2>Add New FAQ</h2>
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
            {{ Form::open(['route' => 'faqs.store']) }}
            <br>
            {{ Form::label('categor', 'Category') }}
            {{ Form::select('categoryid', $categories, ['class'=> 'form-control']) }}
            <br>
            {{ Form::label('subcategory', 'Sub Category') }}
            {{ Form::select('subcategoryid', $subcategories, ['class'=> 'form-control']) }}
            <br>
            {{ Form::label('question', 'Question') }}
            {{ Form::text('question', '', ['class'=> 'form-control']) }}
            <br>
            {{ Form::label('answer', 'Answer') }}
            {{ Form::textarea('answer', '', ['class'=> 'form-control']) }}
            <br>
            <div class="text-center"> 
                {{ Form::submit('Create', ['class'=> 'btn btn-primary ']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>


@endsection