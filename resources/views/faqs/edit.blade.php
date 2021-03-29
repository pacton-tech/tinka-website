@extends('faqs.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit FAQ</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faqs.index') }}"> Back</a>
            </div>
        </div>
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
            {!! Form::open(array('route' => ['faqs.update', $faq->id], 'method' => 'patch')) !!}
            <br>

            {{ Form::label('question', 'Question') }}
            {{ Form::text('question', old('question'), ['class'=> 'form-control']) }}
            <br>
            {{ Form::label('answer', 'Answer') }}
            {{ Form::text('answer', old('answer'), ['class'=> 'form-control']) }}
            <br>
            {{ Form::label('category', 'Category') }}
            {{ Form::text('categoryid', old('categoryid'),$categories, ['class'=> 'form-control']) }}
            <br>
            {{ Form::label('subcategory', 'Subcategory') }}

            <br>
            <div class="text-center "> 
                {{ Form::submit('Update', ['class'=> 'btn btn-primary ']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection