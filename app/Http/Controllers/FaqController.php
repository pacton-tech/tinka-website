<?php
  
namespace App\Http\Controllers;
   
use App\Models\faq;
use App\Models\faqcategory;
use App\Models\faqsubcategory;
use Illuminate\Http\Request;
  
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::latest()->paginate(5);
        $categories = ['categories' => faqcategory::pluck('categoryname','id')];
        $subcategories = ['subcategories' => faqsubcategory::pluck('subcategoryname','id')];
        return view('faqs.index',compact('subcategories','categories','faqs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ['categories' => faqcategory::pluck('categoryname','id')];
        $subcategories = ['subcategories' => faqsubcategory::pluck('subcategoryname','id')];
        return view('faqs.create', compact('categories', 'subcategories'));

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
            'question' => 'required',
            'answer' => 'required',
            'categoryid' => 'required',
            'subcategoryid' => 'required',
        ]);
    
        Faq::create($request->all());
     
        return redirect()->route('faqs.index')
                        ->with('success','Faq created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return view('faqs.show',compact('faq'));
    } 
    
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ['categories' => faqcategory::pluck('categoryname','id')];
        $subcategories = ['subcategories' => faqsubcategory::pluck('subcategoryname','id')];
        $faq = faq::find($id);
        return view('faqs.edit',compact('subcategories','categories','faq'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $categories = ['categories' => faqcategory::get()];
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'categoryid' => 'required',
            'subcategoryid' => 'required',
        ]);
    
        $faq->update($request->all());
    
        return redirect()->route('faqs.index')
                        ->with('success','Faq updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
    
        return redirect()->route('faqs.index')
                        ->with('success','Faq deleted successfully');
    }
}