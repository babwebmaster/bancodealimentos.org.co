<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\Directors;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Directors::all();
        return view('dashboard.directors.index-directors', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $director = new Directors();
        return view('dashboard.directors.create-directors', compact('director'));
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
            'title' => 'nullable|min:3|max:50|string',
            'name' => 'required|min:3|max:50|string',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
        ]);
        if(isset($validated["image"])){
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->getClientOriginalName().$validated["image"]->extension();
            $validated["image"]=$fileName;
            $request->image->move(public_path("images"), $fileName);
        }
        Directors::create($validated);
        session()->flash('flash.banner', 'Directivo Creado Correctamente!');
        session()->flash('flash.bannerStyle', 'success');
        return to_route('directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web\Directors  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Directors $director)
    {
        $prev = redirect()->getUrlGenerator()->previous();
        return view('dashboard.directors.show-directors', compact('director','prev'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\Directors  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Directors $director)
    {
        return view('dashboard.directors.edit-directors', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\Directors  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directors $director)
    {
        $validated = $request->validate([
            'title' => 'nullable|min:3|max:50|string',
            'name' => 'required|min:3|max:50|string',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
        ]);
        if(isset($validated["image"])){
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->getClientOriginalName().$validated["image"]->extension();
            $validated["image"]=$fileName;
            $request->image->move(public_path("images"), $fileName);
        }
        $director->update($validated);
        Alert::toast('Reconocimiento Editado Correctamente!', 'success');
        return to_route('directors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web\Directors  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directors $director)
    {
        $delete = $director->delete();
        if($delete){
            Alert::alert('Exito', 'Directivo  Eliminado Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("directors.index");
    }
}
