<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use File;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $slider = Slider::orderBy('id','DESC')->paginate(10);
        return view('admin.sliders.index', compact('slider'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $id = Slider::insertGetId([
            'name' => $input['name'],
            'caption' => $input['caption'],
            'enabled' => 1,
            'image' => '',
            'url' => $input['url'] ?? ''
        ]);

        if($request->has('image')){

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->extension();

            $destinationPath = public_path('uploads/slider');
            $img = Image::make($image->path());
            $img->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
    
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);

            Slider::where('id', $id)->update([
                'image' => $input['imagename']
            ]);
        }

        return redirect()->route('admin.slider.index')->withSuccess('New slider has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.edit')->with('slider', $slider)->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->name = $request->input('name');
        $slider->url = $request->input('url') ?? '';
        $slider->caption = $request->input('caption');
        $slider->enabled = $request->input('enabled');
        $slider->save();

        if($request->has('image')){

            // delete old file
            File::delete('uploads/slider/'.$slider['image']);

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->extension();

            $destinationPath = public_path('uploads/slider');
            $img = Image::make($image->path());
            $img->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
    
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);

            Slider::where('id', $id)->update([
                'image' => $input['imagename']
            ]);
        }
        
        return redirect()->route('admin.slider.index')->with('success','Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        File::delete('uploads/slider/'.$slider['image']);
        return redirect()->route('admin.slider.index')->with('success','Slider deleted successfully');
    }
}
