<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\Reconocimientos;
use Illuminate\Http\Request;

class ReconocimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.reconocimientos.index-reconocimientos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\web\Reconocimientos  $reconocimientos
     * @return \Illuminate\Http\Response
     */
    public function show(Reconocimientos $reconocimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\Reconocimientos  $reconocimientos
     * @return \Illuminate\Http\Response
     */
    public function edit(Reconocimientos $reconocimientos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\Reconocimientos  $reconocimientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reconocimientos $reconocimientos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web\Reconocimientos  $reconocimientos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reconocimientos $reconocimientos)
    {
        //
    }
}
