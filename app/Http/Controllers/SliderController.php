<?php

namespace App\Http\Controllers;

use App\Model\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::get();
        return view('slider.index', compact('slider'));
    }

    public function create()
    {
        return view('slider.create');
    }

    public function store( Request $request)
    {
        $slider = new Slider;
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if($request->hasfile('image'))
        {
          $file = $request->file('image');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/slider/', $filename);
          $slider->image = $filename;
        }
        $slider->status = $request->input('status') == true ? '1':'0';
        $slider->save();
        return redirect()->route('sliders.index')->with('success', 'Product created successfully.');

    }


    public function edit($id)
    {
     $slider = Slider::findOrFail($id);
 
     return view('slider.edit', compact('slider'));
 
    }
 
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if($request->has('image'))
        {
          $file = $request->file('image');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/slider/', $filename);
          $slider->image = $filename;
        }
        $slider->save();
      
 
      return redirect()->route('sliders.index')->with('success','Slider Update successfully.');
    }
 

    public function destroy($id)
   {
       $slider = Slider::findOrFail($id);
       $slider->delete();

       return redirect()->route('sliders.index')->with('success','Slider Delete successfully.');
   }  
}
