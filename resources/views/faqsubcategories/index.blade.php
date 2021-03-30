@extends('faqsubcategories.layout')
 
 @section('content')
     <div class="row" 
            style=" box-sizing: border-box; margin: 5px; justify-content: center;">
         <div class="col-lg-12 margin-tb">
            <h2>Subcategory Menu</h2>
         </div>
     </div>
     <div class="row"style=" box-sizing: border-box; margin: 5px; justify-content: center;">
        <div class="col-lg-12 margin-tb">
                 <a class="btn btn-success" href="{{ route('faqsubcategories.create') }}"> Create New Subcategory</a>
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
             <th>Subcategory</th>

             <th width="200px">Action</th>
         </tr>
         @foreach ($faqsubcategories as $subcategory)
         <tr>
             <td>{{ ++$i }}</td>
             <td>{{ $subcategory->subcategoryname }}</td>

             <td>
                 <form action="{{ route('faqsubcategories.destroy',$subcategory->id) }}" method="POST">
     
                     <a class="btn btn-primary" href="{{ route('faqsubcategories.edit',$subcategory->id) }}">Edit</a>
    
                     @csrf
                     @method('DELETE')
       
                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
   
     {!! $faqsubcategories->links() !!}
       
 @endsection
 