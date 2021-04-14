@extends('faqsubcategories.layout')
 
 @section('content')
     <div class="pull-right" style=" margin-top:20px;">
        <a class="btn btn-primary" href="{{ route('faqs.index') }}"> Back</a>
     </div>
     <div class="row" 
            style=" box-sizing: border-box; margin: 5px; justify-content: center;">
         <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Subcategory Menu</h2>
            </div>
         </div>
     </div>
     <div class="row"style=" box-sizing: border-box;margin-bottom:20px;margin-top:50px; justify-content: center;">
        <div class="col-lg-12 margin-tb">
                 <a class="btn btn-primary" href="{{ route('faqsubcategories.create') }}"> Create New Subcategory</a>
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
             <th>Subcategory</th>

             <th width="180px">Action</th>
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
 