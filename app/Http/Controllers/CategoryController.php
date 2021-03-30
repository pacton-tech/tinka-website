<?php
  
namespace App\Http\Controllers;
   
use App\Models\Faqcategory;
use Illuminate\Http\Request;
  
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqcategories = Faqcategory::latest()->paginate(5);
    
        return view('faqcategories.index',compact('faqcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqcategories.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryname' => 'required',
        ]);
    
        Faqcategory::create($request->all());
     
        return redirect()->route('faqcategories.index')
                        ->with('success','Category created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Faqcategory  $faqcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Faqcategory $faqcategory)
    {
        return view('faqcategories.show',compact('faqcategory'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faqcategory  $faqcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Faqcategory $faqcategory)
    {
        return view('faqcategories.edit',compact('faqcategory'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faqcategory  $faqcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faqcategory $faqcategory)
    {
        $request->validate([
            'categoryname' => 'required',
        ]);
    
        $faqcategory->update($request->all());
    
        return redirect()->route('faqcategories.index')
                        ->with('success','Category updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faqcategory  $faqcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faqcategory $faqcategory)
    {
        $faqcategory->delete();
    
        return redirect()->route('faqcategories.index')
                        ->with('success','Category deleted successfully');
    }
}