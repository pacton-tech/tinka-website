@extends('faqcategories.layout')
 
 @section('content')
     <div class="pull-right"style=" margin-top:20px;">
        <a class="btn btn-primary" href="{{ route('faqs.index') }}"> Back</a>
     </div>
     <div class="row" 
            style=" box-sizing: border-box; justify-content: center;">
         <div class="col-lg-12 margin-tb">
            <div class="text-center">
            <h2>Category Menu</h2>
            </div>
         </div>
     </div>
     <div class="row"style=" box-sizing: border-box;margin-bottom:20px;margin-top:50px;justify-content: center;">
        <div class="col-lg-12 margin-tb">
                 <a class="btn btn-primary" href="{{ route('faqcategories.create') }}"> Create New Category</a>
        </div>
     </div>
    
     @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p>{{ $message }}</p>
         </div>
     @endif

    <table class="table table-bordered" 
            style=" justify-content: center;">
         <tbody>
         <tr>
             <th>No</th>
             <th>Category</th>

             <th width="140px">Action</th>
         </tr>
         @foreach ($faqcategories as $category)
         <tr>
             <td>{{ ++$i }}</td>
             <td>{{ $category->categoryname }}</td>

             <td>
                 <form action="{{ route('faqcategories.destroy',$category->id) }}" method="POST">
     
                     <a class="btn btn-primary" href="{{ route('faqcategories.edit',$category->id) }}">Edit</a>
    
                     @csrf
                     @method('DELETE')
       
                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
   
     {!! $faqcategories->links() !!}
       
 @endsection
 