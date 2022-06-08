<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\SlideMain;
use Illuminate\Http\Request;

class SlideMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = SlideMain::paginate(10);
        return view('dashboard.sliders.index-slide', compact('sliders'));
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
     * @param  \App\Models\web\SlideMain  $slideMain
     * @return \Illuminate\Http\Response
     */
    public function show(SlideMain $slideMain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\SlideMain  $slideMain
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideMain $slideMain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\SlideMain  $slideMain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideMain $slideMain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web\SlideMain  $slideMain
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideMain $slideMain)
    {
        //
    }
}
