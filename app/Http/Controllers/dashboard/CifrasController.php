<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\Cifras;
use Illuminate\Http\Request;

class CifrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cifras = Cifras::paginate(10);
        return view('dashboard.cifras.index-cifras', compact('cifras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cifras.create-cifras');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web\Cifras  $cifras
     * @return \Illuminate\Http\Response
     */
    public function show(Cifras $cifras)
    {
        return view('dashboard.cifras.show-cifras');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\Cifras  $cifras
     * @return \Illuminate\Http\Response
     */
    public function edit(Cifras $cifras)
    {
        return view('dashboard.cifras.edit-cifras');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\Cifras  $cifras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cifras $cifras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web\Cifras  $cifras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cifras $cifras)
    {
        //
    }
}
