<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\Reconocimientos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReconocimientosController extends Controller
{
    protected $apiKeyFontawesome;

    public function __construct()
    {
        $this->apiKeyFontawesome  = env('API_KEY_FONTAWESOME');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reconocimiento = Reconocimientos::orderByRaw('date_announcement DESC')->get();
        $reconocimientos = $this->get_year_announcement($reconocimiento);
        return view('dashboard.reconocimientos.index-reconocimientos', compact('reconocimientos'));
    }

    public function get_year_announcement($reconocimientos)
    {
        foreach($reconocimientos as $r){
            $fecha = Carbon::parse($r->date_announcement);
            $año = $fecha->format('Y');
            $r->date_announcement = $año;
        }
        return $reconocimientos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reconocimientos  = new Reconocimientos();
        return view('dashboard.reconocimientos.create-reconocimientos', compact('reconocimientos'));
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
            'title' => 'required|min:3|max:50|string',
            'content' => 'required|min:3|max:50|string',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'icon' => 'required|string',
            'color' => 'required|string',
            'date_announcement' => 'required'
        ]);
        if(!empty($validated["image"])){
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->getClientOriginalName().$validated["image"]->extension();
            $validated["image"]=$fileName;
            $request->image->move(public_path("images"), $fileName);
        }else{
            $validated["image"] = '';
        }
        Reconocimientos::create($validated);
        session()->flash('flash.banner', 'Cifra Creado Correctamente!');
        session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Creado Correctamente!', 'success');
        // Alert::toast('Usuario Creado Correctamente!', 'success');
        return to_route('reconocimientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web\Reconocimientos  $reconocimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Reconocimientos $reconocimiento)
    {
        return view('dashboard.reconocimientos.show-reconocimientos', compact('reconocimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\Reconocimientos  $reconocimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Reconocimientos $reconocimiento)
    {
        return view('dashboard.reconocimientos.edit-reconocimientos', compact('reconocimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\Reconocimientos  $reconocimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reconocimientos $reconocimiento)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:50|string',
            'content' => 'required|min:3|max:50|string',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'icon' => 'nullable|string',
            'color' => 'required|string',
            'date_announcement' => 'required'
        ]);
        if(isset($validated["image"])){
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->getClientOriginalName().$validated["image"]->extension();
            $validated["image"]=$fileName;
            $request->image->move(public_path("images"), $fileName);
        }
        $reconocimiento->update($validated);
        Alert::toast('Reconocimiento Editado Correctamente!', 'success');
        return to_route('reconocimientos.index');
    }
}
