<?php
  
namespace App\Http\Controllers;
   
use App\Models\Faq;
use App\Models\faqcategory;
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
    
        return view('faqs.index',compact('faqs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = faqcategory::all();
        return view('faqs.create');

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = faqcategory::all();
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
    public function edit(Faq $faq)
    {
        return view('faqs.edit',compact('faq'));
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
        $categories = faqcategory::all();
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