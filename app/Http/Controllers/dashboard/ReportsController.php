<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\web\Reports;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Reports::latest()->take(6)->get();;
        return view('dashboard.reports.index-reports', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $report = new Reports();
        return view('dashboard.reports.create-reports', compact('report'));
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
            'name' => 'min:3|max:100|string',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'linkSpanish' => 'required|min:3|max:100|string',
            'linkEnglish' => 'nullable|min:3|max:100|string',
            'linkFrench' => 'nullable|min:3|max:100|string',
        ]);
        if(isset($validated["image"])){
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->getClientOriginalName().$validated["image"]->extension();
            $validated["image"]=$fileName;
            $request->image->move(public_path("images"), $fileName);
        }
        Reports::create($validated);
        session()->flash('flash.banner', 'Informe Creado Correctamente!');
        session()->flash('flash.bannerStyle', 'success');
        return to_route('reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web\Reports  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $report)
    {
        return view('dashboard.reports.show-reports', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web\Reports  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $report)
    {
        return view('dashboard.reports.edit-reports', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web\Reports  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $report)
    {
        $validated = $request->validate([
            'name' => 'min:3|max:100|string',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'linkSpanish' => 'required|min:3|max:100|string',
            'linkEnglish' => 'sometimes|nullable|min:3|max:100|string',
            'linkFrench' => 'sometimes|nullable|min:3|max:100|string',
        ]);
        if(isset($validated["image"])){
            $fileName = env('APP_URL')."images"."/".'d-'.time().'.'.$validated["image"]->getClientOriginalName().$validated["image"]->extension();
            $validated["image"]=$fileName;
            $request->image->move(public_path("images"), $fileName);
        }
        $report->update($validated);
        Alert::toast('Informe Editado Correctamente!', 'success');
        return to_route('reports.index');
    }
}
