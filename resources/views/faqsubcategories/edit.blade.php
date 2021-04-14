@extends('faqsubcategories.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Subcategory</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faqsubcategories.index') }}"> Back</a>
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
            {!! Form::open(array('route' => ['faqsubcategories.update', $faqsubcategory['id']], 'method' => 'patch')) !!}
            <br>

            {{ Form::label('subcategoryname', 'Subcategory Name') }}
            {{ Form::text('subcategoryname', $faqsubcategory['subcategoryname'], ['class'=> 'form-control']) }}
            <br>
            <div class="text-center "> 
                {{ Form::submit('Update', ['class'=> 'btn btn-primary ']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection