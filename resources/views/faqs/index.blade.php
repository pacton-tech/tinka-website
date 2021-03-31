@extends('faqs.layout')
 
 @section('content')
        <div class="row" 
            style=" box-sizing: border-box; justify-content: center; margin-top:54px;">
         <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>FAQ Admin Interface</h2>
            </div>
         </div>
     </div>
     <div class="row"style=" box-sizing: border-box; margin-bottom:20px; margin-top:50px; justify-content: center;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('faqs.create') }}"> Create New FAQ</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faqcategories.index') }}"> View Categories</a>
                 <a class="btn btn-primary" href="{{ route('faqsubcategories.index') }}"> View Subcategories</a>
            </div>          
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
             <th width="40px" style="text-align:center;">No</th>
             <th>Question</th>
             <th>Answer</th>
             <th width="90px" style="text-align:center;">Category</th>
             <th width="100px" style="text-align:center;">Subcategory</th>
             <th width="100px" style="text-align:center;">Action</th>
         </tr>
         @foreach ($faqs as $faq)
         <tr>
             <td  style="text-align:center;">{{ ++$i }}</td>
             <td>{{ $faq->question }}</td>
             <td>{{ $faq->answer }}</td>
             <td  style="text-align:center;">{{ $faq->categories['categoryname'] }}</td>
             <td  style="text-align:center;">{{ $faq->subcategories['subcategoryname'] }}</td>
             <td>
                 <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
     
                     <a class="btn btn-primary" style="margin-bottom:5px;" href="{{ route('faqs.edit',$faq->id) }}">&nbsp&nbspEdit&nbsp&nbsp</a>
    
                     @csrf
                     @method('DELETE')
       
                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
   
     {!! $faqs->links() !!}
       
 @endsection
 