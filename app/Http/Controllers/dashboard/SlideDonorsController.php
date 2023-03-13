<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\SlideDonors;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SlideDonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideDonor = SlideDonors::all();
        return view('dashboard.slideDonors.index-slideDonors', compact('slideDonor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slideDonor = new SlideDonors();
        return view('dashboard.slideDonors.create-slideDonors', compact('slideDonor'));
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
            'name' => 'required|min:3|max:50|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048|dimensions:width=600,height=600',
            'status' => 'required|string',
        ]);
        $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->extension();
        $validated["image"]=$fileName;
        $request->image->move(public_path("images"), $fileName);
        SlideDonors::create($validated);
        session()->flash('flash.banner', 'Slide Donante Creado Correctamente!');
        session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Creado Correctamente!', 'success');
        // Alert::toast('Usuario Creado Correctamente!', 'success');
        return to_route('slide-donors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web\SlideDonors  $slideDonor
     * @return \Illuminate\Http\Response
     */
    public function show(SlideDonors $slideDonor)
    {
        return view('dashboard.slideDonors.show-slideDonors', compact('slideDonor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\SlideDonors  $slideDonor
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideDonors $slideDonor)
    {
        return view('dashboard.slideDonors.edit-slideDonors', compact('slideDonor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\SlideDonors  $slideDonor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideDonors $slideDonor)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'status' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:2048|dimensions:width=600,height=600',
        ]);
        if (isset($validated["image"])) {
            // dd($request->image);
            // dd($request->validated()["image"]->hashName());
            // dd($request->validated()["image"]->extension());
            
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->extension();
            $validated["image"]=$fileName;
            $request->image->move(public_path("images"), $fileName);
        }
        $slideDonor->update($validated);
        // session()->flash('flash.banner', 'Usuario Editado Correctamente!');
        // session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Editado Correctamente!', 'success');
        Alert::toast('Slide Nuestros Donantes Editado Correctamente!', 'success');
        return to_route('slide-donors.index');
    }


}
