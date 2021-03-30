@extends('faqcategories.layout')
 
 @section('content')
     <div class="row" 
            style=" box-sizing: border-box; margin: 5px; justify-content: center;">
         <div class="col-lg-12 margin-tb">
            <h2>Category Menu</h2>
         </div>
     </div>
     <div class="row"style=" box-sizing: border-box; margin: 5px; justify-content: center;">
        <div class="col-lg-12 margin-tb">
                 <a class="btn btn-success" href="{{ route('faqcategories.create') }}"> Create New Category</a>
        </div>
     </div>
    
     @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p>{{ $message }}</p>
         </div>
     @endif

    <table class="table table-bordered" 
            style=" justify-content: center;
                    margin: 20px;">
         <tbody>
         <tr>
             <th>No</th>
             <th>Category</th>

             <th width="200px">Action</th>
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
 