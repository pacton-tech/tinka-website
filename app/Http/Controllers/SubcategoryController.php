<?php
  
namespace App\Http\Controllers;
   
use App\Models\Faqsubcategory;
use Illuminate\Http\Request;
  
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqsubcategories = Faqsubcategory::latest()->paginate(5);
    
        return view('faqsubcategories.index',compact('faqsubcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqsubcategories.create');
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
            'subcategoryname' => 'required',
        ]);
    
        Faqsubcategory::create($request->all());
     
        return redirect()->route('faqsubcategories.index')
                        ->with('success','Subcategory created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Faqsubcategory  $faqsubcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Faqsubcategory $faqsubcategory)
    {
        return view('faqsubcategories.show',compact('faqsubcategory'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faqsubcategory  $faqsubcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Faqsubcategory $faqsubcategory)
    {
        return view('faqsubcategories.edit',compact('faqsubcategory'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faqsubcategory  $faqsubcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faqsubcategory $faqsubcategory)
    {
        $request->validate([
            'subcategoryname' => 'required',
        ]);
    
        $faqsubcategory->update($request->all());
    
        return redirect()->route('faqsubcategories.index')
                        ->with('success','Subcategory updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faqsubcategory  $faqsubcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faqsubcategory $faqsubcategory)
    {
        $faqsubcategory->delete();
    
        return redirect()->route('faqsubcategories.index')
                        ->with('success','Subcategory deleted successfully');
    }
}