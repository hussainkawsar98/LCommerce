<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Testimonial::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:testimonials|max:255',
            'description' => 'max:255',
        ]);

        $testimonial = Testimonial::insert([
            'name' => $request->name,
            'slug' => Str::of($request->name)->slug('-'),
            'description' => $request->description,
        ]);
        Session::flash('success', 'Testimonial Created Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'max:255',
            'description' => 'max:255',
        ]);
        
        $testimonial->name = $request->name;
        $testimonial->slug = Str::of($request->name)->slug('-');
        $testimonial->description = $request->description;

        $testimonial->save();

        Session::flash('success', 'Testimonial Edit Successfully!');
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
       if($testimonial){
            $testimonial->delete();

            Session::flash('success', 'Testimonial Deleted Successfully!');
            return redirect()->route('testimonial.index');
       }
    }
}
