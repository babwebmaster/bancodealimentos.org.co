<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\CategoryCifras;
use App\Models\web\Cifras;
use App\Models\web\CifrasCategoryCifra;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CifrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cifras = Cifras::orderBy('id', 'DESC')->limit(5)->get();
        $category_cifras = CategoryCifras::all();
        return view('dashboard.cifras.index-cifras', ['cifras' => $cifras, 'category_cifras' => $category_cifras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cifra = new Cifras();
        $category_cifras = CategoryCifras::all();
        return view('dashboard.cifras.create-cifras', compact('cifra','category_cifras'));
    }

    public function createCifrasCategoryCifras($categoryCifras, $idCifra)
    {
        $cifra = Cifras::find($idCifra);
        $cifra->categoryCifras()->attach($categoryCifras);
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
            'value' => 'required|numeric',
            'published' => 'required',
            'category' => 'required',
            'icon' => 'mimes:jpg,jpeg,png|max:2048|dimensions:width=300,height=300',
        ]);
        $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["icon"]->extension();
        $validated["icon"]=$fileName;
        $request->icon->move(public_path("images"), $fileName);
        //a variable is created and the category data is assigned to it.
            $categoryCifras = $validated["category"];
        //I remove from the validation array the item category that contains the categories because I already assigned it to the variable :$categoryCifras
            unset($validated["category"]);
        //I store the id of the insertion in the variable :$idCifra 
            $idCifra = Cifras::create($validated);
        //send the categories data and the id of the number to create the many-to-many relationship in the pivot table cifras_category_cifras
            $this->createCifrasCategoryCifras($categoryCifras, $idCifra->id);

        session()->flash('flash.banner', 'Cifra Creado Correctamente!');
        session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Creado Correctamente!', 'success');
        // Alert::toast('Usuario Creado Correctamente!', 'success');
        return to_route('cifras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web\Cifras  $cifra
     * @return \Illuminate\Http\Response
     */
    public function show(Cifras $cifra)
    {
        return view('dashboard.cifras.show-cifras', compact('cifra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\Cifras  $cifras
     * @return \Illuminate\Http\Response
     */
    public function edit(Cifras $cifra)
    {
        $category_cifras = CategoryCifras::all();
        return view('dashboard.cifras.edit-cifras', compact('cifra','category_cifras'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\Cifras  $cifras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cifras $cifra)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'value' => 'required|numeric',
            'published' => 'required',
            'category' => 'required',
            'icon' => 'mimes:jpg,jpeg,png|max:2048|dimensions:width=300,height=300',
        ]);
        if (isset($validated["icon"])) {
            // dd($request->image);
            // dd($request->validated()["image"]->hashName());
            // dd($request->validated()["image"]->extension());
            
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["icon"]->extension();
            $validated["icon"]=$fileName;
            $request->icon->move(public_path("images"), $fileName);
        }
        //a variable is created and the category data is assigned to it.
            $categoryCifras = $validated["category"];
        //I remove from the validation array the item category that contains the categories because I already assigned it to the variable :$categoryCifras
            unset($validated["category"]);
        $cifra->categoryCifras()->sync($categoryCifras);
        $cifra->update($validated);
        // session()->flash('flash.banner', 'Usuario Editado Correctamente!');
        // session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Editado Correctamente!', 'success');
        Alert::toast('Cifra Creada Correctamente!', 'success');
        return to_route('cifras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web\Cifras  $cifras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cifras $cifra)
    {
        $delete = $cifra->delete();
        if($delete){
            Alert::alert('Exito', 'Cifra Eliminada Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("cifras.index");
    }
}
